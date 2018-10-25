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

Route::get('home', 'CategoryController@index')->name('home');

Route::get('users/{name?}/{address?}/{age?}', 'UserController@show');
Route::get('type/{type}', 'UserController@display');

Route::resource('photos', 'PhotoController');
Route::resource('category', 'CategoryController');
Route::resource('expense', 'ExpenseController');
Route::resource('income', 'IncomeController');
