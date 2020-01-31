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
Route::get('/','ContactformController@index');
Route::get('index','ContactformController@index')->name('list.of.form');
Route::get('addform','ContactformController@create');
Route::post('formsave','ContactformController@store');
Route::get('perviewform/{id}','ContactformController@perviewform');
