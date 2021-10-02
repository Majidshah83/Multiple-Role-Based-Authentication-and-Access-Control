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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () { 

  Route::group(['middleware' => ['role:manager,admin']], function () { 

      Route::get('/home', 'HomeController@index')->name('home');
      Route::get('/admin_dashboard','Admin\DashboardController@index');
      Route::get('/manager_dashboard','Manger\DashboardController@index');

  });

  Route::group(['middleware' => ['role:manager,admin,user']], function () { 
           Route::get('/user_dashboard','User\DashboardController@index');
  });

  Route::group(['middleware' => ['role:manager,admin,operator']], function () {

        Route::get('/opertor_dashboard','Operator\DashboardController@index');

  });



});