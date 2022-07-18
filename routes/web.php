<?php

use App\Http\Controllers\PandaAuth\HomeController;
use App\Http\Controllers\PandaAuth\LoginController;
use App\Http\Controllers\PandaAuth\SignupController;
use App\Http\Controllers\User\UserController;
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
/* Auth Route */

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/signup', [SignupController::class, 'index'])->name('signup.index');
Route::post('/signup', [SignupController::class, 'signup'])->name('signup');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/', [HomeController::class, 'index'])->middleware('auth')->name('home');

/* User Route */
Route::import('users', UserController::class);
Route::crud('users', UserController::class);