<section class="galeria  wow animate__animated animate__fadeInUp">
            <header class="parallax-padrao">
                <h2>Galeria</h2>
                <h3>Momentos que traduzem nosso propósito</h3>
            </header>
            
            @foreach ($listaGaleria as $linha)
                
            
                <div class="itensGaleria">
                
                        <img src="{{ asset("barista/assets/$linha->imagem_galeria")}}" alt="{{ $linha->nome_galeria}}">
                
                </div>
            @endforeach
        </section>
