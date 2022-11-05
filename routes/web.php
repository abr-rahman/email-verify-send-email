<?php

use App\Mail\OrderShipped;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmailController;





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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/email', [EmailController::class, 'create']);
Route::post('/email/store', [EmailController::class, 'store'])->name('email.store');
Route::get('/test', [EmailController::class, 'index']);

// Route::get('/test', function () {
//     $time = [
//         'time' => '9:00pm',
//         'carbon' => new Carbon(),
//     ];
//     Mail::to('towkir1997islam@gmail.com')->send( new OrderShipped($time));
//     echo 'Send';
//     Mail::to('sanoarulslm@gmail.com')->send( new OrderShipped($time));
//     echo 'Send';
// });

