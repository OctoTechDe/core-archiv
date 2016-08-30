<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Landing Page Route
Route::get('/', function () {
    return view('welcome');
});

// Auth Routes
Auth::routes();

// Home Route after Login
Route::get('/home', 'HomeController@index');

// Users Index Route
Route::get('/users', 'UserController@index');