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

Route::get('/', 'HomeController@index');
Route::get('/load-latest-messages', 'MessagesController@getLoadLatestMessages');
Route::post('/send', 'MessagesController@postSendMessage');
Route::get('/fetch-old-messages', 'MessagesController@getOldMessages');
Auth::routes();
