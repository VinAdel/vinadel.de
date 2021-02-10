<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

// Guest
Route::middleware('guest')->name('guest.')->group(function() {
    // Welcome
    Route::get('/', function () { return view('Guest.index'); })->name('welcome');

    // Register
    Route::get('register', [Controllers\Guest\RegisterController::class, 'index'])->name('register');
    Route::post('register', [Controllers\Guest\RegisterController::class, 'register'])->name('register.post');
    
    // Login
    Route::get('login', [Controllers\Guest\LoginController::class, 'index'])->name('login');
    Route::post('login', [Controllers\Guest\LoginController::class, 'login'])->name('login.post');
});

// Auth
Route::middleware('auth')->name('auth.')->group(function() {
    // Welcome
    Route::get('/home', function () { return view('Auth.index'); })->name('home');
});