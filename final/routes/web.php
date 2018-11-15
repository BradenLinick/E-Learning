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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', 'AboutController@index');

Route::get('/myclasses', 'myclasses@index');

Route::get('/lessons', 'LessonsController@index');

Route::get('/htmlintro', 'IntroController@htmlIntro');
Route::get('/cssintro', 'IntroController@cssIntro');
Route::get('/jsintro', 'IntroController@jsIntro');
Route::get('/api/lesson/{number}', 'LessonsController@api');