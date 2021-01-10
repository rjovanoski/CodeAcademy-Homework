<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PageController@index')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/recipes', 'PageController@recipes')->name('recipes');

Route::get('/recipes/breakfast', 'BreakfastController@index')->name('breakfast');
Route::get('/recipes/bread', 'BreadController@index')->name('bread');
Route::get('/recipes/meat', 'MeatController@index')->name('meat');
Route::get('/recipes/burger', 'BurgerController@index')->name('burger');
Route::get('/recipes/pasta', 'PastaController@index')->name('pasta');
Route::get('/recipes/pizza', 'PizzaController@index')->name('pizza');
Route::get('/recipes/cake', 'CakeController@index')->name('cake');
Route::get('/recipes/soup', 'SoupController@index')->name('soup');
Route::get('/recipes/vegan', 'VeganController@index')->name('vegan');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/profile', 'HomeController@index')->name('profile');

Route::get('profile/recipes', 'RecipeController@index')->name('userRecipes');
Route::get('profile/recipes/create', 'RecipeController@create')->name('create');
Route::post('profile/recipes/store', 'RecipeController@store')->name('store');
Route::get('profile/recipes/{recipe}/edit', 'RecipeController@edit')->name('edit');
Route::post('profile/recipes/{recipe}/update', 'RecipeController@update')->name('update');