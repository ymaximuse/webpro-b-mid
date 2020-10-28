<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\EventController;
// use App\Http\Controllers\TicketController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('my-tickets',[App\Http\Controllers\TicketController::class, 'myTicket'])->name('my-tickets');
Route::get('buy-tickets/{id}',[App\Http\Controllers\TicketController::class, 'buyTicket'])->name('buy-tickets');
Route::get('ticket-check/{id}',[App\Http\Controllers\TicketController::class, 'ticketCheck'])->name('ticket-check');
Route::get('mark-ticket/{id}',[App\Http\Controllers\TicketController::class, 'markTicket'])->name('mark-ticket');
Route::get('event-detail/{id}',[App\Http\Controllers\EventController::class, 'show'])->name('event-detail');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::resource('/my-events', EventController::class);