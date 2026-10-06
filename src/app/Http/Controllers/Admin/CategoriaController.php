<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriaRequest;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::OrderByDesc('id_categoria')->get();
        return view('admin.categoria.index', compact('categorias'));
    }

    public function store(CategoriaRequest $request){
        $categoria = new Categoria();
        $categoria->nome_categoria = $request->nome_categoria;
        $categoria->status_categoria = $request->status_categoria;

        $categoria->save();

        return redirect()->back()->with('success', 'Categoria criada com sucesso!');
    }


}