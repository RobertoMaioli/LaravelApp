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

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobrenos', 'SobreNosController@sobrenos')->name('site.sobrenos');

/* GET e Post pode estar com mesmo apelido para a mesma rota */
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@salvar')->name('site.contato');

Route::get('/login', function () { return 'Login'; })->name('site.login');

/*Agrupando Rotas com prefixo e utilizando name() para dar apelido na rota*/
Route::prefix('/dashboard')->group(function(){
    Route::get('/fornecedores', 'FornecedorController@index')->name('dash.fornecedor');
    Route::get('/clientes', function () { return 'Clientes'; })->name('dash.clientes');
    Route::get('/produtos', function () { return 'Produtos'; })->name('dash.produtos');
});

/* Enviando Parêmetros para Controller e criar controller com "php artisan make:controller TestController" */
Route::get('/teste/{params1}/{params2}','TesteController@teste')->name('teste');

/* Redirecionamento de rota de fallback, para páginas 404*/
Route::fallback(function(){
    echo "Essa página não existe. <a href=".route('site.index').">Clique aqui</a>";
});

/* Enviando Parêmetros pela rota */
// Route::get(
//     '/contato/{nome}/{categoria_id}',
//     function(
//         string $nome, 
//         int $categoria_id = 1
//     ){
//         echo "Dados: $nome - $categoria_id";
//     }
//     /* Expressões regulares para validar valor do parametro */
// )->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');