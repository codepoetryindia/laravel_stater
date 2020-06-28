<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

// Admin Routes
Route::group(['middleware' => ['auth', 'preventBackHistory'], 'namespace' => 'Admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('profile', 'ProfileController');
    Route::get('/change-password', 'ProfileController@changePassword')->name('change-password');
    Route::resource('users', 'UserController');
    // Route::resource('students', 'Admin\StudentController');
});
