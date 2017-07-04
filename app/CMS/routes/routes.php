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

Route::get('admin', ['uses' => 'CMSMenuController@getCMSMenu', 'middleware' => 'cms.auth']);

Route::group(
    ['prefix' => 'admin/park', 'as' => 'cms.park.', 'middleware' => 'cms.auth'],
    function (){
        Route::get('/edit/{park_id}',['as' => 'edit', 'uses' => 'CMSParkController@getEdit']);
        Route::put('/edit/{park_id}', ['as' => 'update', 'uses' => 'CMSParkController@putUpdate']);

        //get create -<> nauja forma
        //post store -> naujos formos postas
        //delete delete -> trinimas

    }
);

Route::group(
    ['prefix' => 'admin/dashbaord', 'as' => 'cms.dashboard.', 'middleware' => 'cms.auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'CMSDashboardController@getDashboard']);

});

Route::group(
  ['prefix' => 'admin/login', 'middleware' => 'guest'], function() {
      Route::get('/', ['as' => 'login', 'uses' => 'CMSLoginController@getLogin']);
      Route::post('/', ['as' => 'login', 'uses' => 'CMSLoginController@postAuthenticate']);
});

Route::get('admin/logout', ['as' => 'logout', 'uses' => 'CMSLoginController@getLogout']);





