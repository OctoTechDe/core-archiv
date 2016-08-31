<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// API Middleware Group
Route::group(['middleware' => 'auth:api'], function() {
    // Get Users
    Route::get('/getUsers', 'UserController@getUsers');
    // Create User
    Route::post('/createUser', 'UserController@createUser');
});


