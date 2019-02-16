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

// Route::get('/', function () {
//     return view('workshops.index');
// });
Route::get('/', 'WorkshopsController@index');
Route::get('workshops', 'WorkshopsController@index');
Route::get('workshops/tilmeldt', 'WorkshopsController@confirmed');
Route::post('/workshops/{id}/tilmelding', 'WorkshopsController@store');
Route::get('/betaling', 'PurchasesController@payment')->name('payment');

Route::get('/masterminds', function () {
    return view('masterminds');
});
Route::get('/sparring', function () {
    return view('oneonone');
});
Route::get('/om', function () {
    return view('about');
});
Route::get('/nyhedsbrev', function () {
    return view('newsletter');
});
Route::get('/handelsbetingelser', function () {
    return view('terms');
});
Route::get('/privatlivspolitik', function () {
    return view('privacy');
});
Route::post('/purchases', 'PurchasesController@store');