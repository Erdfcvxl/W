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

//Landing page
Route::get('/', ['as' => 'landingPage', 'uses' => 'LandingPageController@getLandingPage']);


Route::get('/test', ['as' => 'test', 'uses' => 'ParkController@testFilter']);

//Parks view
Route::get('/parks', ['as' => 'parks', 'uses' => 'ParkController@getList']);
Route::post('/parks', ['as' => 'filterParks', 'uses' => 'ParkController@postList']);