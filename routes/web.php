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

Route::get('/', 'HomeController@index')->name('home');
Route::post('post', 'HomeController@store');
Route::get('/company', 'HomeController@company')->name('company');
Route::post('/company', 'HomeController@addcompany')->name('add.company');
Route::resource('/crud', 'ResorseController');
Route::get('/student', 'HomeController@Student')->name('student'); 
Route::post('/add-student', 'HomeController@addStudent')->name('add.student'); 
