<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Produtos;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produtos::OrderByDesc('id_produto')->get();
        return view('admin.produtos.index', compact('produtos'));
    }
}   