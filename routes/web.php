<?php

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
// Frontend
Route::get('/', 'Frontend\HomeController@index')->name('home');

Auth::routes();

// Backend
// Admin
Route::group(['prefix' => 'admin','middleware' => ['is_admin']], function() {
    Route::get('/dashboard','Backend\HomeController@admindashboard')->name('admin.dashboard');
});

// Moderator
Route::group(['prefix' => 'moderator'], function() {
    Route::get('/dashboard','Backend\HomeController@moderatordashboard')->name('moderator.dashboard');
});

// Common
Route::get('/dashboard','Backend\HomeController@dashboard')->name('dashboard');