<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (Auth::guest())
	{
		if (Request::ajax())
		{
			return Response::make('Unauthorized', 401);
		}
		else
		{
			return Redirect::guest('login');
		}
	}
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});

/**
 * force ssl filter
 */
Route::filter('force.ssl', function()
{
	$envs = ['production', 'staging'];
	if (!Request::secure() && array_search(App::environment(), $envs) !== false)
	{
		return Redirect::secure(Request::getRequestUri());
	}
});
Route::filter('force.nossl', function()
{
	$envs = ['production', 'staging'];
	if (Request::secure() && array_search(App::environment(), $envs) !== false)
	{
		return Redirect::to(Request::getRequestUri(), 302, [], false);
	}
});

/**
 * Filter to avoid the access of the sub-domain.
 */
Route::filter('force.nosubdomain', function()
{
	if (strpos(Request::root(), 'www.organic-papa.com') !== false)
	{
		$url = 'https://organic-papa.com' . Request::getRequestUri();
		return Redirect::to($url, 302, [], false);
	}
});
