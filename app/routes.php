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
Route::group(['before' => 'force.ssl'], function()
{
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
	Route::get('/event/{id}', 'EventController@show');

	// /company
	Route::get('/company', function() { return View::make('company.index'); });
	Route::get('/company/summary', function() { return View::make('company.summary'); });
	Route::get('/company/greeting', function() { return View::make('company.greeting'); });
	Route::get('/company/business_alliance', function() { return View::make('company.businessAlliance'); });


	// inner api
	Route::group(['before' => 'csrf'], function()
	{
		Route::get('/home/zip2add', 'HomeController@zip2add');
	});
});

Route::group(['before' => 'force.ssl'], function()
{
	// /company/contact
	Route::match(['GET', 'POST'], '/company/contact', 'CompanyController@contactInput');
	Route::group(['before' => 'csrf'], function()
	{
		Route::post('/company/contact/confirm', 'CompanyController@contactConfirm');
		Route::post('/company/contact/proc', 'CompanyController@contactProc');
	});
	Route::get('/company/contact/complete', 'CompanyController@contactComplete');

	// /regular
	Route::get('/regular', 'RegularController@index');
	Route::group(['before' => 'csrf'], function()
	{
		Route::post('/regular/register', 'RegularController@register');
	});
});
