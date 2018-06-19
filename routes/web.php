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
    'uses'=>'HomeController@index'
]);

Route::get('/news', [
    'as'=>'news_path',
    'uses'=>'HomeController@news_index'
]);

Route::get('/mmenu/{id}', [
    'as'=>'main_menu_path',
    'uses'=>'HomeController@main_menu_show'
]);

Route::get('/submenu/{id}', [
    'as'=>'submenu_path',
    'uses'=>'HomeController@submenu_show'
]);

Route::get('/msmenu/{id}', [
    'as'=>'main_submenu_path',
    'uses'=>'HomeController@main_submenu_show'
]);

Route::get('/mission', [
    'as'=>'mission_path',
    'uses'=>'HomeController@mission_show'
]);

Route::get('/content/{id}', [
    'as'=>'duguilan_show_path',
    'uses'=>'HomeController@duguilan_show'
]);

Route::get('/news/{id}', [
    'as'=>'news_show_path',
    'uses'=>'HomeController@news_show'
]);

Route::get('/event/{id}', [
    'as'=>'event_show_path',
    'uses'=>'HomeController@event_show'
]);

Route::get('/about', [
    'as'=>'news_path',
    'uses'=>'HomeController@about_index'
]);

Route::get('/law', [
    'as'=>'news_path',
    'uses'=>'HomeController@law_index'
]);

Route::get('/class', [
    'as'=>'news_path',
    'uses'=>'HomeController@class_index'
]);

Route::get('/events', [
    'as'=>'events_path',
    'uses'=>'HomeController@event_index'
]);

Route::get('/transparency', [
    'as'=>'news_path',
    'uses'=>'HomeController@transparency_index'
]);

Route::auth();

Route::get('/home', 'HomeController@index');

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
    'uses'=>'HomeController@index'
]);