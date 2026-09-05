<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::OrderByDesc('id_cliente')->get();
        return view('admin.cliente.index', compact('clientes'));
    }
}