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

// Admin Routes.
Route::get('admin/logout', array(
  'as' => 'admin.logout',
  'uses' => 'App\Controllers\Admin\AuthController@getLogout'
));

Route::get('admin/login', array(
  'as' => 'admin.login',
  'uses' => 'App\Controllers\Admin\AuthController@getLogin'
));

Route::post('admin/login', array(
  'as' => 'admin.login.post',
  'uses' => 'App\Controllers\Admin\AuthController@postLogin'
));

Route::group(array('prefix' => 'admin', 'before' => 'auth.admin'), function () {

  Route::any('/', 'App\Controllers\Admin\PagesController@index');
  Route::resource('articles', 'App\Controllers\Admin\ArticlesController');
  Route::resource('videos', 'App\Controllers\Admin\VideosController');
  Route::resource('pages', 'App\Controllers\Admin\PagesController');

  Route::resource('config', 'App\Controllers\Admin\ConfigController');
});

Route::get('/', array(
  'as' => 'home',
  'uses' => 'GeneralController@getHome'
));

// Site Routes.
Route::get('contact', array(
  'as' => 'contact',
  'uses' => 'GeneralController@getContact'
));

Route::get('raphael-js', array(
  'as' => 'raphael',
  'uses' => 'GeneralController@getRaphael'
));

// Art group.
Route::get('art', array(
  'as' => 'art',
  'uses' => 'ArtController@getIndex'
));

Route::group(array('prefix' => 'art'), function () {



  Route::any('/', function() {
    return Redirect::Route('art-about');
  });

  Route::get('about', array(
    'as' => 'art-about',
    'uses' => 'ArtController@getAbout'
  ));
  Route::get('how-we-work', array(
    'as' => 'art-how-we-work',
    'uses' => 'ArtController@getHowWeWork'
  ));

  Route::get('works', array(
    'as' => 'art-works',
    'uses' => 'ArtController@getWorks'
  ));
});

// Movie group.
Route::get('movie/{id?}', array(
  'as' => 'movie',
  'uses' => 'GeneralController@getMovie'
));
// End Movie group.

// Web group.
Route::get('web', array(
  'as' => 'web',
  'uses' => 'GeneralController@getWeb'
));

Route::group(array('prefix' => 'web'), function () {

  Route::any('/', function() {
    return Redirect::Route('art-about');
  });
  Route::any('about', function() {
    return Redirect::Route('art-about');
  });
});

Route::get('sound', array(
  'as' => 'sound',
  'uses' => 'ArtController@getIndex'
));

Route::group(array('prefix' => 'sound'), function () {

  Route::any('/', function() {
    return Redirect::Route('art-about');
  });
  Route::any('about', function() {
    return Redirect::Route('art-about');
  });
});

// End Sound group.