<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Usuarios;
class UsuariosController extends Controller
{
    public function index()
    {
        $listaUsuarios = Usuarios::OrderByDesc('id_usuarios')->get();
        return view('admin.usuarios.index', compact('listaUsuarios'));
    }
}