<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Horarios;

class HorariosController extends Controller
{
    public function index()
    {
        $listarHorarios = Horarios::OrderByDesc('id_horarios')->get();
        return view('admin.horarios.index', compact('listarHorarios'));
    }
}