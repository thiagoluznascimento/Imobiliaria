@extends('admin.layouts.principal') {{--diretiva de herança do blade, está herdando da minha view principal--}}

@section('conteudo-principal') {{--section serve para direcionar esse contúdo para a minha view principal--}}
{{--tudo que eu colocar aqui, ele vai subtituir lá na minha view principal, @yield('conteudo-principal')--}}

    <section class="section"> {{--essa classe já vem no materializecss, só add ela aqui--}}

        <table  class="highlight">
            <thead>
                <tr>
                    <th>Cidade</th>
                    <th class="right-align">Opções</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cidades as $cidade) {{--b:forelse--}}
                    <tr>
                        <td>{{$cidade->nome}}</td>
                        <td class="right-align">Excluir - Remover</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Não existem cidades cadastradas.</td>  {{--uma coluna que ocupa duas posiçoes--}}
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-ligth" href="{{route('admin.cidades.form')}}">
                <i class="large material-icons">add</i>
            </a>
        </div>
        
    </section>

@endsection

{{-- @section('secundario')

    <p>So pra teste msm</p>

@endsection --}}
