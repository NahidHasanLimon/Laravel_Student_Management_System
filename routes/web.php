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
Route::get('/','StudentController@index')->name('index');

Route::get('/studentList','StudentController@studentList')->name('studentList');

Route::get('/createStudent','StudentController@createStudent')->name('createStudent');

Route::get('/editStudent/{id}','StudentController@editStudent')->name('editStudent');

Route::post('/storeStudent','StudentController@storeStudent')->name('storeStudent');
Route::post('/updateStudent/{id}','StudentController@updateStudent')->name('updateStudent');

Route::post('/deleteStudent/{id}','StudentController@deleteStudent')->name('deleteStudent');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
