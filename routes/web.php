<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\PopController@index'); 

Auth::routes();

//user
Route::get('/login', function () {return view('login/create', ['title' => 'Login']);}); 
Route::post('/login', 'LoginController@store');
Route::delete('/login', 'LoginController@destroy');

//pop
Route::post('/pop', 'App\Http\Controllers\PopController@store')->name('popRegister');
Route::get('/pop/create', 'App\Http\Controllers\PopController@create');
Route::get('/pop/{id}/edit', 'App\Http\Controllers\PopController@edit');
Route::patch('/pop/{id}', 'App\Http\Controllers\PopController@update');
Route::delete('/pop/{id}', 'App\Http\Controllers\PopController@destroy');

//user
Route::post('/user', 'App\Http\Controllers\RegisterController@store')->name('register');
Route::get('/user', 'App\Http\Controllers\RegisterController@index');
Route::get('/user/create', 'App\Http\Controllers\RegisterController@create');
Route::get('/user/{id}/edit', 'App\Http\Controllers\RegisterController@edit'); 
Route::patch('/user/{id}', 'App\Http\Controllers\RegisterController@update');
Route::delete('/user/{id}', 'App\Http\Controllers\RegisterController@destroy');

//category
Route::post('/category', 'App\Http\Controllers\CategoryController@store')->name('categoryRegister');
Route::get('/category',  'App\Http\Controllers\CategoryController@index');
Route::get('/category/create', 'App\Http\Controllers\CategoryController@create');
Route::get('/category/{id}/edit', 'App\Http\Controllers\CategoryController@edit');
Route::patch('/category/{id}', 'App\Http\Controllers\CategoryController@update');
Route::delete('/category/{id}', 'App\Http\Controllers\CategoryController@destroy');

//parameter
Route::get('/parameter', function () {return view('parameter/index', ['title' => 'Usuários']);});
Route::post('/parameter', 'ParameterController@store');
Route::patch('/parameter', 'ParameterController@update');

Route::get('/report', 'App\Http\Controllers\ReportController@index');
