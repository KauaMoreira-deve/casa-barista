@extends('layout.site')

@section('content')
    <section class="cardapio">
    <header class="parallax-padrao wow animate__animated animate__fadeInUp">
        <h2>CARDÁPIO | {{ $categoriaSelecionada->nome_categoria}}</h2>
        <nav>
            <ul class="listaCardapio">
                @foreach ($listaCategoria as $linha)
                    <li class="listaCardapio-li">
                        <a href="{{ route('cardapio.categoria',$linha->id_categoria)}}">{{$linha->nome_categoria}}</a>
                    </li>
                @endforeach
                
            </ul>
        </nav>
    </header>

    <div class="site card-cardapio">
        @foreach ($produtos as $linha)
        <div class="card-flip  wow animate__animated animate__fadeInUp">
            <article class="card-flip-miolo">
                <div class="flip1">
                    <h4>{{$linha->nome_produto}}</h4>
                </div>
                <div class="flip2">
                    <h4>{{$linha->nome_produto}}<span>{{number_format($linha->valor_produto, 2, ',','.')}}</span></h4>
                    <h5>{{$linha->descricao_curta_produto}}</h5>
                </div>
            </article>
        </div>
        @endforeach
        

    </div>

</section>
@endsection