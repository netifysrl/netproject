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
Route::resource('projects', 'ProjectController');
Route::resource('tasks', 'TaskController');
Route::resource('deals', 'DealController');




//test
//Route::get('/', function () {
    //return view('dashboard.dash');
//});
Route::get('/', 'DashboardController@home');
Route::get('/dashboard', 'DashboardController@home');
// End Test

// Auto for Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
