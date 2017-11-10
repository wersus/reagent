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


Route::get('/', 'ReagentController@index');

Auth::routes();

Route::resources([
    'manufacturer' => 'ManufacturersController',
    'classification' => 'ClassificationsController',
    'concentration' => 'ConcentrationsController',
    'method' => 'MethodsController',
    'reagent' => 'ReagentController',
]);


Route::get('/home', 'HomeController@index')->name('home');
