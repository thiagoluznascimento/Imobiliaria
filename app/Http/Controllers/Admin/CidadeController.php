<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CidadeRequest;

use App\Models\Cidade;  //está usando o BD

class CidadeController extends Controller
{
    public function cidades(){

        $subtitulo  = 'Cidades cadastradas';
        // $cidades = ['Recife', 'Belo Horizonte', 'Pirapora'];
        $cidades = Cidade::all(); //Cidade é o meu modelo. vai dá um  ''select * from'' na tabela

        // dd($cidades); //do laravel, serve para imprimir o que está armazenada nessa variavel
        // foreach($cidades as $cidade){
        //     echo $cidade->id;
        //     echo $cidade->nome;
        // }
       return view('admin.cidades.index', compact('subtitulo', 'cidades')); //estou passando essa variavel pra view cidades. usando a funcao compact do php.
    }

    public function formAdicionar()
    {
        return view('admin.cidades.form');
    }
    public function adicionar(CidadeRequest $request) // requisição para o methodo
    {
        //pegando o dado enviado pelo form
        // $nome = $request->input('nome'); //nome que está no input lá no formulário (form.blade)
        // $nome = $request->nome; //msm coisa de cima
        // echo $nome;

        //Criar um objeto do modelo (classe) Cidade
        // $cidade = new Cidade(); // essa classe que comunica com o BD
        // $cidade->nome = $request->nome;

        // $cidade->save(); //salva no BD

        /*Outro jeito de fazer, por atribuição em massa*/
        //Criar um objeto do modelo (classe) Cidade
        Cidade::create($request->all()); //nome do modelo(Cidade) e o metodo(create) ou seja slv tudo no BD

        /*usamos para guardar dados de forma flash na sessão*/
        $request->session()->flash('sucesso', "cidade $request->nome incluída com sucesso!");

        return redirect()->route('admin.cidades.listar');
    }
    public function delete($id, Request $request)
    {
        Cidade::destroy($id);
        $request->session()->flash('sucesso', "cidade Excluida com sucesso!");
        return redirect()->route('admin.cidades.listar');
    }
}

//existem várias formas de passar dados do controller para view, nesse caso eu usei o compact do PHP.
