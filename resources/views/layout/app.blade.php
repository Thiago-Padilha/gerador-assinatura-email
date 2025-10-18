<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Gerador de Assinaturas</title>

    <!-- Links de CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ajuda.css') }}">
    
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}" defer></script>
    <script src="{{ asset('js/dom-to-image.js') }}" defer></script>
    <script src="{{ asset('js/ajuda.js') }}" defer></script>


    @yield('head') <!-- Para scripts ou estilos adicionais que você queira adicionar em páginas específicas -->
</head>
<body>
    <div class="card" style="margin: 2% 5%; padding: 1%; border:none;">
        <div id="content">
            @yield('conteudo')
            <h5 id="text-footer">Departamento Tecnologia da Informação</h5>
        </div>
    </div>

    @yield('javascript') <!-- Para scripts específicos de cada página -->
</body>
</html>
