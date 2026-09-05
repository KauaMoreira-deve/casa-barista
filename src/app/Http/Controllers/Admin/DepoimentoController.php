<?php 

namespace App\Http\Controllers\Admin;  
use App\Http\Controllers\Controller;
use App\Models\Depoimento;


class DepoimentoController extends Controller{

    public function index(){

        $listaDepo = Depoimento::with('DepoimentoCliente')->orderByDesc('id_depoimentos')->get();

        

        return view('admin.depoimentos.index', compact('listaDepo'));

    }
    
}