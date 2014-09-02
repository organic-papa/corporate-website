<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// /
Route::get('/', function() { return View::make('index'); });

// /formmer
Route::get('/farm', function() { return View::make('farm.index'); });
Route::get('/farm/product', function() { return View::make('farm.product'); });
Route::get('/farm/order_plantation', function() { return View::make('farm.orderPlantation'); });
Route::get('/farm/newfarmers', function() { return View::make('farm.newfarmers'); });

// /post
Route::get('/post', function() { return View::make('post.index'); });
Route::get('/post/farmer', function() { return View::make('post.farmer'); });
Route::get('/post/book', function() { return View::make('post.book'); });
Route::get('/post/recipes', 'RecipeController@index');
Route::get('/post/recipe/{id}', 'RecipeController@show');

// /event
Route::get('/event', function() { return View::make('event.index'); });
Route::get('/event/marche', function() { return View::make('event.marche'); });
Route::get('/event/1', 'EventController@show');

// /company
Route::get('/company', function() { return View::make('company.index'); });
