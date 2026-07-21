<!DOCTYPE html>
<html lang="pt-br">
<head>
     {{-- aqui entra o partial de head --}}

    @include('partials.head')
</head>


<body>
    {{-- //Cabeçalho --}}
    @include('partials.topo')

    {{-- //Main --}}
        <main>
            {{-- // area de conteudo --}}
            @yield('content')
        </main>
    {{-- //Footer --}}
    @include('partials.rodape')

    {{-- //scripts --}}

    @include('partials.script')
</body>

</html>


