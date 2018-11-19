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

Route::get('/', function () {
    return view('index');
});

Route::get('/tipopagto', 'TipoPagtoController@exibir');


Route::get('/faq', function () {
    return view('faq');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    return view('index');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/validacao', function () {
    return view('validacao');
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
