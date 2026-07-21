<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class HomeController extends Controller{
    //Método Home = carregar index(home)

    public function home(){
        
        return view('site.home.home');
    
    }


}

