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

// projects
//Route::get('/projects', 'ProjectController@index');
Route::post('/projects', 'ProjectController@store');

// project
Route::get('/project/{project}', 'ProjectController@show');
Route::get('/project/delete/{project}', 'ProjectController@delete');
Route::get('/project/add/file/{project}', 'FileController@store');

// login and register
Auth::routes();

//Messenger Routes
Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});


//Auto Complete Routes
Route::get('/user/autocomplete', function() {
	return App\User::all();
});

//Contact Us Routes
Route::post('/sendtoadmin', 'MessagesController@adminSend');

//pages that are for logged in users only
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/account', 'HomeController@account')->name('account');
Route::get('/organization', 'HomeController@organization')->name('organization');
Route::get('/projects', 'HomeController@projects')->name('projects');
Route::get('/successverification', function() {
	return view('vendor.laravel-user-verification.successverification');
});
//Route::group(['middleware' => ['isVerified']], function ()) 

// to be shortened
Route::get('/', function () {return view('welcome');});
Route::get('/welcome', function () {return view('welcome');});
Route::get('/home', function () {return view('home');});
Route::get('/organization', function () {return view('organization');});
Route::get('/contact', function () {return view('contact');});
Route::get('/sample', function () {return view('sample');});
Route::get('/admin', function () {return view('admin');});
Route::get('/contact', function () {return view('contact');});
Route::get('/search', function () {return view('search');});
Route::get('/sample', function () {return view('sample');});