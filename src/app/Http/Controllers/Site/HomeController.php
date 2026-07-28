<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Depoimento;

class HomeController extends Controller{
    //Método Home = carregar index(home)

    public function home(){
        
        // Busque a lista de banner para exibir na home (views)
        $listaBanner = Banner::where('status_banner', 'ATIVO')->inRandomOrder()->get();
        //dd($listaBanner);

        //Buscar os depoimentos APROVADOS junto com os dados dos clientes
        $listaDepo = Depoimento::with('DepoimentoCliente')
                                ->where('status_depoimentos', 'APROVADO')
                                ->orderByDesc('id_depoimentos')->get();
       
        //dd($listaDepo->toArray());
        return view('site.home.home', compact('listaBanner', 'listaDepo'));
    
    }


}

