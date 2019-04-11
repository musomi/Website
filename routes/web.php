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

Route::get('/','Directions@index');
Route::get('/about','Directions@about');
Route::get('/gallery','Directions@gallery');
Route::get('/services','Directions@services');
Route::get('/contact','Directions@contact');
Route::post('/contact/info','Directions@sendemail');

Route::get('/appointment','Directions@appointment');
Route::post('/appointment','Directions@book');
