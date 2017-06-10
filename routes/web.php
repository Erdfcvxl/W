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

Route::get('/', function () {
    return view('public.landing1');
});

Route::get('/test', ['as' => 'test', 'uses' => 'ParkController@testFilter']);

//Parks view
Route::get('/parks', ['as' => 'parks', 'uses' => 'ParkController@getList']);
Route::post('/parks', ['as' => 'filterParks', 'uses' => 'ParkController@postList']);

Route::group(['prefix' => 'admin'], function (){
    Route::get('createEvent', [
        'uses' =>'Admin\EventController@getCreateEvent',
        'as' => 'admin.createEvent'
    ]);

    Route::post('createEvent', [
        'uses' => 'Admin\EventController@postCreateEvent',
        'as' => 'admin.createEvent'
    ]);

    Route::get('editEvent/{id}', [
        'uses'  => 'Admin\EventController@getEditEvent',
        'as' => 'admin.editEvent'
    ]);

    Route::post('editEvent',[
        'uses' => 'Admin\EventController@postEditEvent',
        'as' => 'admin.editEvent'
    ]);

    Route::get('events', [
        'uses' => 'Admin\EventController@getEvents',
        'as' => 'admin.events'
    ]);

    Route::get('schedule', [
        'uses' => 'ReservationController@getAdminReservations',
        'as' => 'admin.schedule'
    ]);
});



Auth::routes();

Route::get('/home', 'HomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@index');
