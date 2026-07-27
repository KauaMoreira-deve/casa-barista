<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Banner;

class HomeController extends Controller{
    //Método Home = carregar index(home)

    public function home(){
        
        // Busque a lista de banner para exibir na home (views)
        $listaBanner = Banner::where('status_banner', 'ATIVO')->inRandomOrder()->get();
        //dd($listaBanner);
       
        return view('site.home.home', compact('listaBanner'));
    
    }


}

