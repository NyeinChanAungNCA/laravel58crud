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
Route::resource('books', 'BookController');
Route::resource('authors', 'AuthorController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('footballers','FootballerController');

// Route::get('footballer','FootballerController@create');
// Route::post('footballer','FootballerController@store');
