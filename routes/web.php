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
Route::get('/', 'PageController@index');
Route::get('business-intelligence', 'PageController@bi');
Route::get('sparring', 'PageController@coaching');
Route::get('handelsbetingelser', 'PageController@terms');
Route::get('privatlivspolitik', 'PageController@privacyPolicy');
Route::get('nyhedsbrev', 'PageController@newsletter');
Route::get('om', 'PageController@about');

Route::get('workshops', 'WorkshopsController@index');
Route::get('workshops/tilmeldt', 'WorkshopsController@confirmed');
Route::post('workshops/{id}/tilmelding', 'WorkshopsController@store');

Route::get('workshops/betaling/{id}', 'PurchasesController@index');
Route::post('workshops/betaling', 'PurchasesController@store');