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

Route::get('/', function () {return view('dashboard', ['title' => 'Dashboard']);}); // 'RaizController@index'

Auth::routes();

Route::get('/login', function () {return view('login/create', ['title' => 'Login']);}); // 'LoginController@create'
Route::post('/login', 'LoginController@store');
Route::delete('/login', 'LoginController@destroy');


Route::post('/pop', 'PopController@store');
Route::get('/pop/create', function () {return view('pop/create', ['title' => 'Novo POP']);}); // 'PopController@create'
Route::get('/pop/{id}/edit', function ($id) {return view('pop/edit', ['title' => 'Alterar POP']);}); //  'PopController@edit'
Route::patch('/pop/{id}', 'PopController@update');
Route::delete('/pop/{id}', 'PopController@destroy');


Route::post('/user', 'App\Http\Controllers\RegisterController@store')->name('register');
Route::get('/user', function () {return view('user/index', ['title' => 'Usuários']);}); // 'UserController@index'
Route::get('/user/create', function () {return view('user/create', ['title' => 'Novo Usuário']);}); //  'UserController@create'
Route::get('/user/{id}/edit', function ($id) {return view('user/edit', ['title' => 'Alterar Usuário']);}); //  'UserController@edit'
Route::patch('/user/{id}', 'RegisterController@update');
Route::delete('/user/{id}', 'RegisterController@destroy');


Route::post('/category', 'CategoryController@store');
Route::get('/category',  function () {return view('category/index', ['title' => 'Usuários']);}); // 'CategoryController@index');
Route::get('/category/create', function () {return view('category/create', ['title' => 'Novo Categoria']);});// 'CategoryController@create');
Route::get('/category/{id}/edit', function ($id) {return view('category/edit', ['title' => 'Alterar Categoria']);});// 'CategoryController@edit');
Route::patch('/category/{id}', 'CategoryController@update');
Route::delete('/category/{id}', 'CategoryController@destroy');

Route::get('/parameter', function () {return view('parameter/index', ['title' => 'Usuários']);}); //'ParameterController@index');
Route::post('/parameter', 'ParameterController@store');
Route::patch('/parameter', 'ParameterController@update');

Route::get('/report', 'ReportController@index');
