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

Route::get('/masterminds', function () {
    return view('masterminds');
});
Route::get('/1-on-1', function () {
    return view('oneonone');
});
Route::get('/om', function () {
    return view('about');
});

Route::post('/purchases', 'PurchasesController@store');