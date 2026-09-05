<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\linhaTempo;

class linhaTempoController extends Controller
{
    public function index()
    {
        $linhasTempo = linhaTempo::OrderByDesc('id_linha_tempo')->get();
        return view('admin.linhaTempo.index', compact('linhasTempo'));
    }
}