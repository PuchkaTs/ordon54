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

Route::get('/', [
    'as'=>'home_path',
    'uses'=>'PagesController@index'
]);

Route::get('/news', [
    'as'=>'news_path',
    'uses'=>'PagesController@news_index'
]);

Route::get('/mmenu/{id}', [
    'as'=>'main_menu_path',
    'uses'=>'PagesController@main_menu_show'
]);

Route::get('/submenu/{id}', [
    'as'=>'submenu_path',
    'uses'=>'PagesController@submenu_show'
]);

Route::get('/msmenu/{id}', [
    'as'=>'main_submenu_path',
    'uses'=>'PagesController@main_submenu_show'
]);

Route::get('/mission', [
    'as'=>'mission_path',
    'uses'=>'PagesController@mission_show'
]);

Route::get('/content/{id}', [
    'as'=>'duguilan_show_path',
    'uses'=>'PagesController@duguilan_show'
]);

Route::get('/news/{id}', [
    'as'=>'news_show_path',
    'uses'=>'PagesController@news_show'
]);

Route::get('/event/{id}', [
    'as'=>'event_show_path',
    'uses'=>'PagesController@event_show'
]);

Route::get('/about', [
    'as'=>'news_path',
    'uses'=>'PagesController@about_index'
]);

Route::get('/law', [
    'as'=>'news_path',
    'uses'=>'PagesController@law_index'
]);

Route::get('/class', [
    'as'=>'news_path',
    'uses'=>'PagesController@class_index'
]);

Route::get('/events', [
    'as'=>'events_path',
    'uses'=>'PagesController@event_index'
]);

Route::get('/transparency', [
    'as'=>'news_path',
    'uses'=>'PagesController@transparency_index'
]);



Route::get('/home', 'PagesController@index');

/**
 * Super Admin
 */
Route::get('ncst', [
    'as'   => 'ncst_path',
    'uses' => 'UsersController@ncst'
]);
Route::post('ncst', [
    'as'   => 'ncst_path',
    'uses' => 'UsersController@ncst_store'
]);

Route::get('/register', [
    'as'=>'home_path',
    'uses'=>'PagesController@index'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', [
    'as'   => 'logout',
    'uses' => 'SessionsController@destroy'
]);
