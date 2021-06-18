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

// Rotte per AUTENTICAZIONE

Auth::routes();

// ROTTE AREA ADMIN
// Route::get('/admin', 'HomeController@index')->name('home');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->name('admin.')
    ->group(function () {
        // ROTTA HOME Admin
        Route::get('/', 'HomeController@index')->name('home');

        // ROTTE RESOURCE POSTS
        Route::resource('/posts', 'PostController');
    });

    // Front OFFICE
    Route::get('{any?}', function () {
    return view('guest.home');
})->where("any", ".*");