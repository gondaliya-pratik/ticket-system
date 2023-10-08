<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tickets;
use App\Http\Requests\TicketsRequest;
use App\Events\AssignedUser;
use App\Events\CloseTicket;
use App\Notifications\AssignedUserNotification;
use App\Notifications\CloseTicketNotification;
use DataTables;

class TicketsController extends Controller
{
	/*
	 * List of Tickets 
	*/
    public function index(Request $request)
	{
	    if ($request->ajax()) {
            $data = Tickets::select('id','title','status')->get();
            return Datatables::of($data)->addIndexColumn()
            	->addColumn('status', function($row) {
            		$status = ($row->status == 'pending') ? 'Pending' : 'Closed';
            		return $status;
            	})
                ->addColumn('action', function($row){
                    $btn = '<a class="btn btn-primary" href="'.url('/tickets/'.$row->id.'/show').'" role="button">View</a>';
                    return $btn;
                })
                ->rawColumns(['status','action'])
                ->make(true);
        }
	    return view('pages.index');
	}

	/*
	 * Create new ticket view
	*/
	public function create()
	{	
		$assign_users = User::all();
	    return view('pages.create', compact('assign_users'));
	}

	/*
	 * Create new ticket store
	*/
	public function store(TicketsRequest $request)
	{
		$input = $request->only('title', 'description','assignuser');
		$ticket = Tickets::create([
			'title' 	  => $input['title'],
			'description' => $input['description'],
			'user_id'     => $input['assignuser'],
		]);

		if($ticket) {
		    $user = User::where('id',$input['assignuser'])->first();
		    if(!empty($user)) {
			    $user->ticket = $ticket;
			    /* Notification Assinged Users */
			    event(new AssignedUser($user));
			    $user->notify(new AssignedUserNotification());
		    }

			return redirect('tickets')->with('status', 'Ticket Added Succuessfully!');
		} else {
			return redirect('tickets/create')->with('danger', 'Something went  Wrong!');
		}
	}

	/*
	 * show ticket details
	*/
	public function show($ticketId)
	{
		$ticket = Tickets::with('assignuser')->where('id',$ticketId)->first();
	    return view('pages.view', compact('ticket'));
	}


	/*
	 * close ticket
	*/
	public function close($ticketId)
	{
	    $ticket = Tickets::where('id',$ticketId)->first();
	    if($ticket) {
	    	$ticket->status = 'closed';
	    	$ticket->save();
	    	$user = User::where('id',$ticket->user_id)->first();
	    	if(!empty($user)) {
			    $user->ticket = $ticket;
			    /* Notification Assinged Users */
			    event(new CloseTicket($user));
			    $user->notify(new CloseTicketNotification());
	    	}
			return redirect('/tickets')->with('status', 'Ticket Closed Succuessfully!');
	    } 
		return redirect('/tickets/'.$ticketId.'/show')->with('status', 'Something went wrong..!');
	}
}
