<?php

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

Route::get('/file1', 'AppleController@first_view');
Route::get('/file2', 'AppleController@second_view');
Route::post('/insertApple','AppleController@insert_apple_details');
