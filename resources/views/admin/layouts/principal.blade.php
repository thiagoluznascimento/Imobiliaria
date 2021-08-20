<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lux Imoveis</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


</head>
<body>
    {{--menu topo tem na documentacao do materializecss --}}
    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="/" class="brand-logo">Lux Imóveis</a>    {{--a.brand-logo--}}
                <ul class="right">               {{--ul.right>(li>a)*2--}}
                    <li>
                        <a href="#">Imóveis</a>
                    </li>
                    <li>
                        <a href="#">Cidades</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{--Conteudo principal (div.conteiner)--}}
    <div class="container">
        @yield('conteudo-principal')  {{--@yield é diretiva do blade. --}}
    </div>

    {{--conteudo secundário--}}
    {{-- <div>    //exemplo se caso eu queira add outro conteúdo na msm pg
        @yield('secundario')
    </div> --}}

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        @if (session('sucesso'))  {{--b:if--}}
            M.toast({html: "{{session('sucesso')}}"});
        @endif
    </script>

</body>
</html>
