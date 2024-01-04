<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\MailController;
//use App\Http\Controllers\SlipGajiController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::resource('/akuns', \App\Http\Controllers\AkunController::class);
Route::resource('/slipgajinya', \App\Http\Controllers\SlipGajiController::class);
Route::resource('/send-mail', \App\Http\Controllers\MailController::class);
Route::get('/send-mail/{nama}', 'MailController@sendEmail');

//dibawah ini contoh email yg sdh jalan
//Route::get('send-mail', [MailController::class, 'index']);


//Route::get('slipgajinya', [SlipGajiController::class, 'index']);

//ini fungsinya untuk mendirect ke page trntntu saat get url first
// Route::get('/', function () {
//     return redirect('slipgajinya');
// });


//ini roting ny menju page defaulf(welcome) lalu ada tombol, dr tombol itu baru masuk ke rout view slipgajis

 //Route::get('/', function () {
   //  return view('welcome');
// });

//----------------------LOGIN PAGE
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
