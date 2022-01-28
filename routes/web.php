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

Route::group(['prefix' => 'frontend'], function() {
    Route::resource('portfolios', 'Frontend\PortfolioController');
});

Auth::routes();

// Backend
// Common
Route::group(['prefix' => 'backend'], function() {
    Route::get('/dashboard','Backend\HomeController@dashboard')->name('dashboard');
    Route::resource('/portfolio','Backend\PortfolioController');
    Route::resource('/portfolio-category','Backend\PortfolioCategoryController');
    Route::resource('/blog','Backend\BlogController');
    Route::resource('/blog-tag','Backend\BlogTagController');
});