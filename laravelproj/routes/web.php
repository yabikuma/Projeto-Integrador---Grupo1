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

/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/', 'CategoriasController@exibirindex');



Route::get('/tipopagto', 'TipoPagtoController@exibir');


Route::get('/produtos/lista/{id}', 'ProdutosController@exibirprodutos');


Route::get('/produtos/detalhe/{id}', 'ProdutosController@exibirproduto_detalhe');

Route::get('/produtos', 'ProdutosController@exibir');
Route::get('/produtos/add', 'ProdutosController@novo');
Route::post('/produtos/add', 'ProdutosController@adicionar');

Route::get('/produtos/editar/{id}', 'ProdutosController@editar');
Route::put('/produtos/editar/{id}', 'ProdutosController@editarProduto');

Route::get('/produtos/excluir/{id}', 'ProdutosController@excluir');
Route::delete('/produtos/excluir/{id}', 'ProdutosController@excluirProduto');

Route::post('/categorias', 'CategoriasController@exibir');


Route::get('/faq', function () {
    return view('faq');
});

Route::get('/login', 'LoginController@login');

Route::post('/cadastro', 'CadastroController@cadastrarUsuario');

Route::get('/logout', function () {
    return view('index');
});

Route::get('/validacao', function () {
    return view('validacao');
});

Route::get('/quemsomos', function () {
    return view('quemsomos');
});

Route::get('/contato', function () {
    return view('contato');
});

Auth::routes();
Route::get('/home', function () {
    return redirect('/');
});
