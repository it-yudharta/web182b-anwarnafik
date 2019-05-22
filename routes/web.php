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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/food', 'FoodController@index');
Route::get('/food/tambah', 'FoodController@create');
Route::get('/food/store', 'FoodController@store');
Route::get('/food/{id}/edit', 'FoodController@edit');
Route::get('/food/{id}/update', 'FoodController@update');
Route::get('/food/{id}/delete', 'FoodController@destroy');

Route::get('/drink', 'DrinkController@index');
Route::get('/drink/tambah', 'DrinkController@create');
Route::get('/drink/store', 'DrinkController@store');
Route::get('/drink/{id}/edit', 'DrinkController@edit');
Route::get('/drink/{id}/update', 'DrinkController@update');
Route::get('/drink/{id}/delete', 'DrinkController@destroy');

Route::get('/snack', 'SnackController@index');
Route::get('/snack/tambah', 'SnackController@create');
Route::get('/snack/store', 'SnackController@store');
Route::get('/snack/{id}/edit', 'SnackController@edit');
Route::get('/snack/{id}/update', 'SnackController@update');
Route::get('/snack/{id}/delete', 'SnackController@destroy');