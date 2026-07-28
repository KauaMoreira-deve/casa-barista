<section class="depo  wow animate__animated animate__fadeInUp">
    <header class="parallax-padrao">
        <h2>DEPOIMENTOS</h2>
        <h3>Nada nos inspira mais do que ouvir a experiência de quem passa por aqui</h3>
    </header>

    <div class="site itensDepo">

        <!-- DEPO 01 -->
        @forelse ($listaDepo as $linha)

            @php
             //garantir que as estrelas fique entre 0 a 5
                $estrela = max(
                    0,
                    min(5, (int) $linha->nota_depoimentos)
                );
             
             //Cliente relacionado com o depoimento
             $cliente = $linha->DepoimentoCliente;
            @endphp

            <article>
                <div class="estrela">
                    <ul>
                        <li><img src="{{ asset('barista/assets/star.svg')}}" alt="Estrela Depo"></li>
                    </ul>
                </div>
                <div class="dadosDepo">
                    <p>{{ $linha->descricao_depoimentos }}</p>
                    <img src="{{ asset("barista/assets/$cliente->foto_cliente")}}" alt="{{ $cliente->nome_cliente}}">
                    <h4>{{ $cliente->nome_cliente}}</h4>
                    <div>

                        <h5>Data: {{ $linha->data_criacao_depoimentos ? $linha->data_criacao_depoimentos->format('d/m/Y') : "Data não informada"}}</h5>
                        <h5>{{ $linha->titulo_depoimentos }}</h5>
                    </div>
                </div>

            </article>
        @empty
            
        @endforelse


    </div>
</section>