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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('workshops');
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
Route::get('/handelsbetingelser', function () {
    return view('terms');
});
Route::get('/privatlivspolitik', function () {
    return view('privacy');
});
Route::post('/purchases', 'PurchasesController@store');