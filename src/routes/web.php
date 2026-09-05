<?php
// USE DA AREA ADMIN
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\Admin\GaleriaController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\DepoimentoController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProdutoController;
use App\Http\Controllers\Admin\linhaTempoController;
use App\Http\Controllers\Admin\UsuariosController;
use App\Http\Controllers\Admin\HorariosController;
// USE DA AREA SITE
use App\Http\Controllers\Site\CardapioController;
use App\Http\Controllers\Site\ContatoController;
use App\Http\Controllers\Site\EventoController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\SobreController;
use Illuminate\Support\Facades\Route;

//SITE
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/sobre', [SobreController::class, 'sobre'])->name('sobre');
Route::get('/cardapio', [CardapioController::class, 'cardapio'])->name('cardapio');
Route::get('/cardapio/categoria/{idCategoria}', [CardapioController::class, 'cardapio'])->name('cardapio.categoria');
Route::get('/evento', [EventoController::class, 'evento'])->name('evento');
Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');

//AREA ADMIN
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::get('/admin/banner', [BannerController::class, 'index'])->name('admin.banner.index');
Route::get('/admin/galeria', [GaleriaController::class, 'index'])->name('admin.galeria.index');
Route::get('/admin/depoimentos', [DepoimentoController::class, 'index'])->name('admin.depoimentos.index');
Route::get('/admin/news', [NewsController::class, 'index'])->name('admin.news.index');
Route::get('/admin/clientes', [ClienteController::class, 'index'])->name('admin.cliente.index');
Route::get('/admin/produtos', [ProdutoController::class, 'index'])->name('admin.produtos.index');
Route::get('/admin/categoria', [CategoriaController::class, 'index'])->name('admin.categoria.index');
Route::get('/admin/linha-tempo', [linhaTempoController::class, 'index'])->name('admin.linhaTempo.index');
Route::get('/admin/usuarios', [UsuariosController::class, 'index'])->name('admin.usuarios.index');
Route::get('/admin/horarios', [HorariosController::class, 'index'])->name('admin.horarios.index');