<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CidadeController;  //importando o controlador
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/admin/cidades'); // o / é sempre a pg inicial mandando para /admin/cidades

// Route::name('admin.')->group(function(){

// });


Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/cidades', [CidadeController::class, 'cidades'])->name('cidades.listar');  //nome do controlador e nome do metodo desse controlador.(metodo cidades)
    Route::get('/cidades/adicionar', [CidadeController::class, 'formAdicionar'])->name('cidades.form');  //->name (nome que quero dá há essa rota) "apelido da rota"
    Route::post('/cidades/adicionar', [CidadeController::class, 'adicionar'])->name('cidades.adicionar');  //->name (nome que quero dá há essa rota) "apelido da rota"
});

Route::get('/sobre', function () {
    return '<h1>Sobre</h1>';
});
