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
Route::get('/', 'WorkshopsController@index');

Route::get('home', 'PageController@index');
Route::get('sparring', 'PageController@coaching');
Route::get('handelsbetingelser', 'PageController@terms');
Route::get('privatlivspolitik', 'PageController@privacyPolicy');

Route::get('workshops', 'WorkshopsController@index');
Route::get('workshops/tilmeldt', 'WorkshopsController@confirmed');
Route::post('workshops/{id}/tilmelding', 'WorkshopsController@store');