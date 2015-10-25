<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('about/index');
});
// Route::get('/auth/register', function(){
// 	return view('auth/register');
// });
// Route::get('/auth/login', function(){
// 	return view('auth/login');
// });
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('/home', function(){
	return view('home');
});
//Products
Route::get('/products/index', function(){
	return view('products.index');
});
Route::get('/products/create', function(){
	return view('products.create');
});
Route::get('/products/edit', function(){
	return view('products.edit');
});
Route::get('/products/show', function(){
	return view('products.show');
});
//Product Photos
Route::get('/products/photos/create', function(){
	return view('photos.create');
});
//Search
Route::get('/serach/index', function(){
	return view('search.index');
});
//User
Route::get('/user/dashboard', function(){
	return view('/user/dashboard');
});
Route::get('/user/account', function(){
	return view('/user/account');
});
Route::get('/user/help', function(){
	return view('/user/help');
});
Route::get('/user/performance', function(){
	return view('/user/performance');
});
Route::get('/user/profile', function(){
	return view('/user/profile');
});
Route::get('/user/settings', function(){
	return view('/user/settings');
});
Route::get('/user/show', function(){
	return view('/user/show');
});
Route::get('/user/transactions', function(){
	return view('/user/transactions');
});








