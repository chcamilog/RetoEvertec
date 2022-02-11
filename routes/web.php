<?php

use App\Http\Controllers\Profilecontroller;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
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

Route::get('/', function () {
    return view('welcome');
});


Route::group( ['middleware' => 'auth', 'verified'], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::view('profile', 'profile')->name('profile');
    Route::put('profile', [Profilecontroller::class, 'update'])->name('profile.update');
    
});

// es el de usuarios hay que modificarlo
Route::view('/users', 'users')->name('users')
    ->middleware('password.confirm');

require __DIR__.'/auth.php';