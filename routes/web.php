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

<<<<<<< HEAD
Route::get('/', function () {return view('dashboard', ['title' => 'Dashboard']);}); // 'RaizController@index'


Route::get('/login', function () {return view('login/create', ['title' => 'Login']);}); // 'LoginController@create'
Route::post('/login', 'LoginController@store');
Route::delete('/login', 'LoginController@destroy');


Route::post('/pop', 'PopController@store');
Route::get('/pop/create', function () {return view('pop/create', ['title' => 'Novo POP']);}); // 'PopController@create'
Route::get('/pop/{id}/edit', function ($id) {return view('pop/edit', ['title' => 'Alterar POP']);}); //  'PopController@edit'
Route::patch('/pop/{id}', 'PopController@update');
Route::delete('/pop/{id}', 'PopController@destroy');


Route::post('/user', 'UserController@store');
Route::get('/user', function () {return view('user/index', ['title' => 'Usuários']);}); // 'UserController@index'
Route::get('/user/create', function () {return view('user/create', ['title' => 'Novo Usuário']);}); //  'UserController@create'
Route::get('/user/{id}/edit', function ($id) {return view('user/edit', ['title' => 'Alterar Usuário']);}); //  'UserController@edit'
Route::patch('/user/{id}', 'UserController@update');
Route::delete('/user/{id}', 'UserController@destroy');


Route::post('/category', 'CategoryController@store');
Route::get('/category', 'CategoryController@index');
Route::get('/category/create', 'CategoryController@create');
Route::get('/category/{id}/edit', 'CategoryController@edit');
Route::patch('/category/{id}', 'CategoryController@update');
Route::delete('/category/{id}', 'CategoryController@destroy');


Route::get('/report', 'ReportController@index');


Route::get('/util/navbar', function () {return view('util/navbar', ['hasMenu' => 'true']);});


Route::get('/util/head', function () {return view('util/head');});
=======
Route::get('/', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});

Route::post('/pop', function () {
    return view('save');
});
Route::get('/pop.create', function () {
    return view('pop/create', ['title' => 'Novo POP']);
});




Route::get('/util.navbar', function () {
    return view('util/navbar');
});

Route::get('/util.head', function () {
    return view('util/head');
});
>>>>>>> cfa153d04f7b89fe5aed9d5fd34774feeb6164bd
