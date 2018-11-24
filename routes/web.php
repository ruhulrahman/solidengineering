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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'LayoutController@index');
Route::get('/services', 'LayoutController@services');
Route::get('/strategry', 'LayoutController@strategry');
Route::get('/vision', 'LayoutController@vision');
Route::get('/gallery', 'LayoutController@gallery');
Route::get('/about-us', 'LayoutController@about_us');
Route::get('/contact', 'LayoutController@contact');
