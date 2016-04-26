<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'InstanceController@index');
Route::get('/{instance}.html', 'InstanceController@instance')
        ->where('instance', '[a-z\-]+');
Route::get('/{instance}/{subinstance}.html', 'InstanceController@instance')
        ->where('instance', '[a-z\-]+')->where('subinstance', '[a-z0-9\-]+');
Route::get('/{instance}/{subinstance}/{product}.html', 'InstanceController@instance')
        ->where('instance', '[a-z\-]+')->where('subinstance', '[a-z0-9\-]+')->where('product', '[a-z0-9\-]+');
//Route::get('/{instance}/{subinstance}.html', 'InstanceController@subinstance')
//        ->where('instance', '[a-z\-]+')->where('subinstance', '[a-z\-]+');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
