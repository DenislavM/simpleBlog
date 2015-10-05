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

//[[Public Routes]]
Route::get('/','HomeController@index');
Route::get('home','HomeController@index');


// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

// Profile routes...
Route::get('view/profile/{id?}','ProfileController@getProfile');

// Articles routes
Route::get('view/article/{id}','ArticlesController@viewArticle');


//[[User Routes]]
Route::group(['middleware' => 'auth'], function () {
    //Profile Routes
    Route::get('edit/profile', 'ProfileController@getProfileInfo');
    Route::post('edit/profile', 'ProfileController@postProfile');
    
    //Article Routes
    Route::post('new/article','ArticlesController@postArticle');
    Route::get('new/article','ArticlesController@newArticle');
    
    Route::get('myArticles','ArticlesController@userArticles');
    
    Route::get('edit/article/{id}','ArticlesController@getEditArticle');
    Route::post('edit/article/{id}','ArticlesController@postArticle');

    Route::get('delete/article/{id}','ArticlesController@deleteArticle');
});