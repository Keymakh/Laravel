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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::view('/', 'welcome');

Route::get('/', 'HomeController@index');
Route::get('/admin', 'Admin/IndexController@index');

Route::get('/test1', 'Admin/IndexController@test1');
Route::get('/test3', 'Admin/IndexController@test3');

/*Route::get('/', [
    "uses" => "HomeController@index"
]);*/



