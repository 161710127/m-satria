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

Route::get('test', 'msatriaController@template');

Route::get('test1', 'msatriaController@template1');

Route::get('test2', 'msatriaController@template2');

Route::get('test3', 'msatriaController@template3');

Route::get('test4', 'msatriaController@template4');

Route::get('test5', 'msatriaController@template5');

