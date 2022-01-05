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

/* 
    primeiro exemplo de como fazer uma rota;
Route::get('/', function () {
    return 'Olá, seja bem vindo ao curso!';
}); 
 
Route::get('/sobre-nos', function () {
    return 'Sobre nós';
});

Route::get('/contato', function () {
    return 'Contato';
});*/

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato'); //metodo GET
Route::post('/contato', 'ContatoController@contato')->name('site.contato'); //metodo POST


Route::get('/login', function (){ return 'Login'; })->name('site.login');


Route::prefix('/app')->group(function() {
Route::get('/clientes', function (){ return 'Clientes'; })->name('app.clientes');
Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
Route::get('/produtos', function (){ return 'Produtos'; })->name('app.produtos');
});


//rota de teste
Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');


//rota de fallback - não retorna um erro, mas sim alguma informação costumizada para o usurio final.
Route::fallback(function(){

    echo'A rota acessada não existe. <a href="' .route('site.index').'">Clique aqui</a> para ir para a página inicial.';

});