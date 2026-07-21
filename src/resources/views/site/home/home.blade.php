@extends('layout.site')

@section('content')

       <!-- Inicio Banner -->
        @include('site.home.banner')
        <!-- Fim Banner -->


        <!-- Inicio Sessão Bem Vindo -->
        @include('site.home.bemvindo')

        <!-- Fim Sessão Bem Vindo -->
        
        <!-- Inicio Sessão Destaque -->
        @include('site.home.destaque')
        <!-- Fim Sessão Destaque -->

        <!-- INÍCIO DA SEÇÃO CARDÁPIO -->
            @include('site.home.cardapio')
        <!-- FIM DA SEÇÃO CARDÁPIO -->

        <!-- INÍCIO DA SEÇÃO EQUIPE -->
            @include('site.home.equipe')
        <!-- FIM DA SEÇÃO EQUIPE -->
            
        <!-- INÍCIO DA SEÇÃO EVENTO -->
            @include('site.home.eventos')
        <!-- FIM DA SEÇÃO EVENTO -->

        <!-- INÍCIO DA SEÇÃO GALERIA -->
            @include('site.home.galeria')
        <!-- FIM DA SEÇÃO GALERIA -->

        <!-- INÍCIO DA SEÇÃO DEPOIMENTO -->
            @include('site.home.depoimento')
        <!-- FIM DA SEÇÃO DEPOIMENTO -->





@endsection