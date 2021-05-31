<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
//use App\Http\Controllers\rickycontroller;
use App\Http\Controllers\Frontend\RickyController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PendidikanController;

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

/* T */

/*Route::get('/halo', function(){
	return 'pemrograman lanjut materi laravel by ricky';
});

Route::get('/ricky', function(){
	echo '<h1>Pemrograman Lanjut</h1>';
	echo '<h3>Materi Laravel</h3>';
	echo '<p>by Ricky Andriawan</p>';
});

route::get('page/{nomor}', function($nomor){return 'panjenengan wonten halaman ke-'.$nomor;
});

route::get('/foto', function() {
	return view('foto');
});

route::get('user', [rickycontroller::class, 'index']);

route::resource('user', rickycontroller::class);

route::get("/ricky", function(){
	return view("ricky");
});*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['web' , 'auth'])->group(function(){
	Route::resource('dashboard', DashboardController::class);
	Route::resource('pendidikan', PendidikanController::class);
});