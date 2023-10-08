@extends('layouts.default')  
@section('content') 
  <div class="page-content--bgf7">
        <div class="offset-3 col-md-6 mt-5">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Ticket Details
                        <small>
                            <span class="badge {{($ticket->status == 'pending') ? 'badge-success' : 'badge-danger'}} float-right mt-1">{{($ticket->status == 'pending') ? 'Pending' : 'Closed'}}</span>
                        </small>
                    </strong>
                </div>
                <div class="card-body">
                	<blockquote class="blockquote mb-0">
                	<h3>{{$ticket->title}}</h3>
                    <p class="card-text">{{$ticket->description}}</p>
                     <footer class="blockquote-footer">Assign User:
                        <cite title="Source Title">{{($ticket->assignuser) ? $ticket->assignuser->name : '-'}}</cite>
                    </footer>
                    </blockquote>
                </div>
            </div>
            @if($ticket->status == 'pending')
            <button type="button" class="btn btn-outline-primary mb-1" data-toggle="modal" data-target="#closeModal">
				Are you want to close ticket this?
			</button>
			@endif	
        </div>
        @include('partials.footer')
    </div>
    <!-- modal close ticket -->
	<div class="modal fade" id="closeModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
	 data-backdrop="static">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticModalLabel">Close Ticket</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Are you want to close ticket this?</p>
					<hr/>
					<form action="{{ url('/tickets/'.$ticket->id.'/close') }}" method="post">
	                	@csrf
						<div class="pull-right">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-success">Confirm</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end modal close ticket -->
@endsection 