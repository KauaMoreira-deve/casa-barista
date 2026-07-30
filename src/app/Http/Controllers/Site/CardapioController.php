<?php 

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Produtos;

class CardapioController extends Controller
{
    public function cardapio(?int $idCategoria = null){
        $listaCategoria = Categoria::where('status_categoria', 'ATIVO')->orderBy('nome_categoria')->get();

        if($idCategoria === null){
            $categoriaSelecionada = $listaCategoria->first();
        }else{
            $categoriaSelecionada = $listaCategoria->firstWhere('id_categoria', $idCategoria);
        }

        abort_if($categoriaSelecionada === null, 404, 'Categoria não encontrada');

        $listaProdutos = Produtos::where('status_produto', 'ATIVO')->orderBy('nome_produto')->get();

        $produtos = Produtos::query()->where('id_categoria', $categoriaSelecionada->id_categoria)
        ->where('status_produto', 'ATIVO')->orderBy('nome_produto')->get();

        //dd($produtos);
        //dd($listaCategoria);


        return view('site.cardapio.cardapio', compact('listaCategoria', 'listaProdutos', 'produtos', 'categoriaSelecionada'));
    }
}