<?php

use App\Http\Controllers\PandaAuth\HomeController;
use App\Http\Controllers\PandaAuth\LoginController;
use App\Http\Controllers\PandaAuth\SignupController;
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
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'login'])->name('login');
Route::get('/signup',[SignupController::class, 'index'])->name('signup.index');
Route::post('/signup',[SignupController::class, 'signup'])->name('signup');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/account.index', function () {
    return view(viewIndex('pages.home'));
})->name('account.index');
Route::get('/account','User\UserController@index')->name('account_management');
Route::post('/account.delete','User\UserController@delete')->name('account_management.delete');
Route::get('/account.import', 'User\UserController@importIndex')->name('account_management.import.index');
Route::post('/account.import', 'User\UserController@import')->name('account_management.import.save');
Route::post('/account.import.confirm', 'User\UserController@confirmIndex')->name('account_management.confirm.confirm');
Route::get('/account.import.result', 'User\UserController@confirmResult')->name('account_management.confirm.result');
Route::get('/admin',function(){
    return view(viewIndex('pages.users'));
})->name('admin_management');
Route::get('/lesson',function(){
    return view(viewIndex('pages.users'));
})->name('lesson_schedule_management');
Route::get('/lesson_student',function(){
    return view(viewIndex('pages.users'));
})->name('lesson_student_management');
Route::get('/lesson_material',function(){
    return view(viewIndex('pages.users'));
})->name('material_management');