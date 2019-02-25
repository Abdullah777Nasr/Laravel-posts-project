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
//
//Route::get('/', function () {
//    return view('welcome');
//});


Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','TemplateController@fristshow');

Route::get('/index','TemplateController@index');
Route::get('/','TemplateController@index');

//Route::get('/home','TemplateController@index');
Route::get('/about','TemplateController@about');
Route::get('/post','TemplateController@post');

Route::get('/addpost','TemplateController@addpost');
Route::post('/insert','TemplateController@insert');

Route::get('/index/{id}/delete','TemplateController@delete');
Route::get('/index/{id}/edit','TemplateController@edit');
Route::post('/index/{id}/update','TemplateController@update');
