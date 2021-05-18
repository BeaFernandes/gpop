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

Route::get('/', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});

Route::post('/pop', function () {
    return view('save');
});
Route::get('/pop.create', function () {
    return view('pop/create', ['title' => 'Novo POP']);
});
Route::get('/pop.edit', function () {
    return view('pop/edit', ['title' => 'Alterar POP']);
});

Route::get('/user.create', function () {
    return view('user/create', ['title' => 'Novo Usuário']);
});
Route::get('/user.edit', function () {
    return view('user/edit', ['title' => 'Alterar Usuário']);
});



Route::get('/util.navbar', function () {
    return view('util/navbar');
});

Route::get('/util.head', function () {
    return view('util/head');
});