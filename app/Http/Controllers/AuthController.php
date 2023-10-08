<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{	
	//Authentication User
    public function login(LoginRequest $request) {
    	$credentials = $request->only('email', 'password');
    	if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('tickets');
        } 
		return redirect('/')->with('danger', 'Invalid email and password');
    }

    //Logout User
	public function logout(Request $request)
	{
	    Auth::logout();
	 
	    $request->session()->invalidate();
	 
	    $request->session()->regenerateToken();
	 
	    return redirect('/');
	}
}
