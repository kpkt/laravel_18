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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@dashboard');
Route::get('dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('data-incomes', 'HomeController@getIncomeData')->name('home.data-incomes');
Route::get('data-expenses', 'HomeController@getExpenseData')->name('home.data-expenses');

Route::get('users/{name?}/{address?}/{age?}', 'UserController@show');
Route::get('type/{type}', 'UserController@display');

Route::resource('photos', 'PhotoController');
Route::resource('category', 'CategoryController');
Route::resource('expense', 'ExpenseController');
Route::resource('income', 'IncomeController');
