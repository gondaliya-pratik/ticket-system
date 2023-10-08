<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckAuthUser;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Default
Route::get('/', function () {
	if(Auth::check()) { 
		return redirect('/tickets');
	}
    return view('home');
});

//Auth
Route::post('/login', [AuthController::class, 'login']);

Route::middleware([CheckAuthUser::class])->group(function () {
	//Tickets
	Route::get('/tickets', [TicketsController::class, 'index'])->name('tickets.index');
	Route::get('/tickets/create', [TicketsController::class, 'create']);
	Route::post('/tickets/store', [TicketsController::class, 'store']);
	Route::get('/tickets/{id}/show', [TicketsController::class, 'show']);
	Route::post('/tickets/{id}/close', [TicketsController::class, 'close']);
 
    //Logout
	Route::get('/logout', [AuthController::class, 'logout']);
});