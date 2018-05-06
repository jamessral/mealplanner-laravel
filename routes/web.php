<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ingredients', 'IngredientsController@index');
Route::get('/ingredients/{ingredient}', 'IngredientsController@show');

Route::get('/recipes', 'RecipesController@index');
Route::get('/recipes/{recipe}', 'RecipesController@show');
