@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">    {{--section.section--}}

        <form action="{{route('admin.cidades.adicionar')}}" method="POST">

        {{--Cross-site request forgery csrf--}}
            @csrf

            <div class="input-field">   <!--div.input-field-->
                <input type="text" name="nome" id="nome" />
                <label for="nome">Nome</label>
                @error('nome')
                <span class="red-text text-accent-3"> <small>{{$message}}</small> </span>
                @enderror
            </div>
            <div class="right-align">
                <a class="btn-flat waves-effect" href="{{url()->previous()}}">Cancelar</a>   <!--a-->  <!--url()->previous()  volta para pag anterior-->
                <button class="btn waves-effect waves-light" type="submit">
                    Salvar
                </button>
            </div>  <!--div.right-align-->
        </form>

    </section>

@endsection
