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
Route::resource('companies', 'CompanyController');
Route::resource('contacts', 'ContactController');

//test
Route::get('/', function () {
    return view('layouts.layout');
});

Route::get('/dashboard', function () {
    return view('dashboard.dash');
});
// End Test

// Auto for Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
