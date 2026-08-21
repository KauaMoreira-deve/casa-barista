<!DOCTYPE html>
<html lang="pt-br">
<head>
     {{-- aqui entra o partial de head --}}

    @include('partials.partialsHome.head')
</head>


<body>
    {{-- //Cabeçalho --}}
    @include('partials.partialsHome.topo')

    {{-- //Main --}}
        <main>
            {{-- // area de conteudo --}}
            @yield('content')
        </main>
    {{-- //Footer --}}
    @include('partials.partialsHome.rodape')

    {{-- //scripts --}}

    @include('partials.partialsHome.script')
</body>

</html>


