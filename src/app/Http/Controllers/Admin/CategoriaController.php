<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::OrderByDesc('id_categoria')->get();
        return view('admin.categoria.index', compact('categorias'));
    }
}