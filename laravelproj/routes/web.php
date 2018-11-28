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

Route::get('/produtos/lista', function () {
    return view('produtos_lista');
});


Route::get('/produtos', 'ProdutosController@exibir');
Route::get('/produtos/add', 'ProdutosController@novo');
Route::post('/produtos/add', 'ProdutosController@adicionar');

Route::get('/produtos/editar/{id}', 'ProdutosController@editar');
Route::put('/produtos/editar/{id}', 'ProdutosController@editarProduto');

Route::get('/produtos/excluir/{id}', 'ProdutosController@excluir');
Route::delete('/produtos/excluir/{id}', 'ProdutosController@excluirProduto');

Route::get('/categorias', 'CategoriasController@exibir');


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
