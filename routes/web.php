<?php

use App\Mail\OrderShipped;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;



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

Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $time = [
        'time' => '9:00pm',
        'carbon' => new Carbon(),
    ];
    // Mail::to('towkir1997islam@gmail.com')->send( new OrderShipped($time));
    // echo 'Send';
    // Mail::to('sanoarulslm@gmail.com')->send( new OrderShipped($time));
    // echo 'Send';
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

