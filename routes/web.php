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
Route::get('/login', 'AuthController@login')->name('auth.login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/monrek', 'MonrekController@index');
Route::get('/', 'AllController@home');
Route::get('test', 'AllController@index');
Route::get('/admin', 'AllController@admin')->name('admin.index');
Route::get('pending', 'AllController@pending')->name('admin.sanggahan_pending');
// Route::get('/monrek', 'AllController@admin')->name('admin.monrek.index');
