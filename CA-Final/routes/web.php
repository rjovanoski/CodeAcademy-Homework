<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@index')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/recipes', 'PageController@recipes')->name('recipes');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/breakfast', 'PageController@breakfast')->name('breakfast');
Route::get('/bread', 'PageController@bread')->name('bread');
Route::get('/burger', 'PageController@burger')->name('burger');
Route::get('/meat', 'PageController@meat')->name('meat');
Route::get('/pasta', 'PageController@pasta')->name('pasta');
Route::get('/pizza', 'PageController@pizza')->name('pizza');
Route::get('/soup', 'PageController@soup')->name('soup');
Route::get('/cake', 'PageController@cake')->name('cake');
Route::get('/vegan', 'PageController@vegan')->name('vegan');

Auth::routes();

Route::get('profile/home', 'UserController@index')->name('profile');
