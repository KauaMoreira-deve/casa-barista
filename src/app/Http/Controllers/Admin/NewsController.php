<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::OrderByDesc('id_news')->get();
        return view('admin.News.index', compact('news'));
    }
}