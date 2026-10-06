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

use App\Http\Controllers\Auth\LoginController;

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


// METODO DE POSTAGEM DE INFORMAÇÃO

/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
|
| O middleware guest permite acessar estas rotas somente quando o usuário NÃO está autenticado.
|
*/

Route::middleware('guest')->group(function () {

    // Exibir tela de login
    Route::get('/login', [LoginController::class, 'index'])
        ->name('login');

    // Processar login
    Route::post('/login', [LoginController::class, 'login'])
        ->name('login.auth');

});


/*
|--------------------------------------------------------------------------
| ÁREA RESTRITA
|--------------------------------------------------------------------------
|
| Todas as rotas deste grupo exigem autenticação.
|
*/

Route::middleware('auth')->group(function () {


    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', [AdminController::class, 'dashboard'])
        ->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */

    Route::post('/logout', [LoginController::class, 'logout'])
        ->name('logout');


    /*
    |--------------------------------------------------------------------------
    | ROTAS ADMINISTRATIVAS
    |--------------------------------------------------------------------------
    */

    Route::prefix('admin')->group(function () {


        /*
        |--------------------------------------------------------------------------
        | CRUD BANNER
        |--------------------------------------------------------------------------
        */

        // Listar banners
        Route::get('/banner', [BannerController::class, 'index'])
            ->name('admin.banner.index');

        // Cadastrar banner
        Route::post('/banner', [BannerController::class, 'store'])
            ->name('admin.banner.store');

        // Editar banner
        // Route::get('/banner/{id}/editar', [BannerController::class, 'edit'])
        //     ->name('admin.banner.edit');

        // Atualizar banner
        Route::put('/banner/{id}', [BannerController::class, 'update'])
            ->name('admin.banner.update');

        // Ativar / desativar banner
        Route::patch('/banner/{id}', [BannerController::class, 'status'])
            ->name('admin.banner.status');


        /*
        |--------------------------------------------------------------------------
        | CRUD GALERIA
        |--------------------------------------------------------------------------
        */

        Route::get('/galeria', [GaleriaController::class, 'index'])
            ->name('admin.galeria.index');


        /*
        |--------------------------------------------------------------------------
        | CRUD PRODUTO
        |--------------------------------------------------------------------------
        */

        Route::get('/produto', [ProdutoController::class, 'index'])
            ->name('admin.produtos.index');


        /*
        |--------------------------------------------------------------------------
        | CRUD CATEGORIA
        |--------------------------------------------------------------------------
        */

        Route::get('/categoria', [CategoriaController::class, 'index'])
            ->name('admin.categoria.index');

        Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');



        /*
      |--------------------------------------------------------------------------
      | CRUD HORARIOS
      |--------------------------------------------------------------------------
      */


        Route::get('/horarios', [HorariosController::class, 'index'])->name('admin.horarios.index');


        /*
     |--------------------------------------------------------------------------
     | CRUD USUARIOS
     |--------------------------------------------------------------------------
     */

        Route::get('/usuarios', [UsuariosController::class, 'index'])->name('admin.usuarios.index');


        /*
    |--------------------------------------------------------------------------
    | CRUD HORARIOS
    |--------------------------------------------------------------------------
    */

        Route::get('/', [AdminController::class, 'admin'])->name('admin');
        Route::get('/banner', [BannerController::class, 'index'])->name('admin.banner.index');
        Route::get('/depoimentos', [DepoimentoController::class, 'index'])->name('admin.depoimentos.index');
        Route::get('/news', [NewsController::class, 'index'])->name('admin.news.index');
        Route::get('/clientes', [ClienteController::class, 'index'])->name('admin.cliente.index');
        Route::get('/linha-tempo', [linhaTempoController::class, 'index'])->name('admin.linhaTempo.index');


    });

});
