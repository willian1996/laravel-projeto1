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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos', 'MeuControlador@produtos');

Route::get('nome', 'MeuControlador@getNome');

Route::get('idade', 'MeuControlador@getIdade');

Route::get('multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar');

Route::resource('clientes', 'ClienteControlador');



















/*

//PASSANDO PARAMETROS PARA ROTA 
Route::get('/ola/{nome}/{sobrenome}', function($nome, $sobrenome){
   echo "Ola! seja bem vindo, $nome $sobrenome!"; 
});

//PASSANDO PARAMETROS OPCIONAL 
Route::get('/seunome/{nome?}', function($nome=null){
    if(isset($nome))
        return "Ola! seja bem vindo, $nome!"; 
    return "Voce não digitou nenhum nome!";
});

//PASSANDO REGRAS NO PARAMETRO 
Route::get('/rotascomregras/{nome}/{n}', function($nome, $n){
    for($i=0; $i<$n; $i++){
        echo "Ola! seja bem vindo, $nome!<br>"; 
    }
})->where('nome', '[A-Za-z]+') //aceitando só strings no nome
  ->where('n', '[0-9]+'); //aceitando só numeros no n

//AGRUPANDO E NOMEANDO ROTAS 
Route::prefix('/aplicacao')->group(function(){
    
    Route::get('/', function(){
        return view('app'); //chamando view index
    })->name('app');//nomeando rotas
    
    Route::get('/user', function(){
        return view('user'); //chamando view user
    })->name('app.user');//nomeando rotas
    
    Route::get('/profile', function(){
        return view('profile'); //chamando view profile
    })->name('app.profile');//nomeando rotas
});

//NOMEANDO TOTAS NÃO AGRUPADAS
Route::get('/produtos11223', function(){
    echo "<h1>Produtos</h2>";
    echo "<ol>";
    echo "<li> Notebook</li>";
    echo "<li> Computador</li>";
    echo "<li> Televisão</li>";
    echo "<li> Impressora</li>";
    echo "</ol>";
})->name('meusprodutos');

//redirecionando requisições
Route::redirect('todosprodutos1', 'produtos', 301);



Route::get('todosprodutos2', function(){
    return redirect()->route('meusprodutos');
});

/////////////////////////////////////////////////////////////

Route::post('/requisicoes', function(Request $request){
    return "Hello POST";
});

Route::delete('/requisicoes', function(Request $request){
    return "Hello DELETE";
});

Route::put('/requisicoes', function(Request $request){
    return "Hello PUT";
});

Route::patch('/requisicoes', function(Request $request){
    return "Hello PATCH";
});

Route::options('/requisicoes', function(Request $request){
    return "Hello OPTIONS";
});

Route::get('/requisicoes', function(Request $request){
    return "Hello GET";
});