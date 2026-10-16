<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::view('/landing', 'landing');

// Rota principal do painel administrativo
Route::get('/admin', [UserController::class, 'index']);

// Rotas de Usuários (Cadastro)
Route::get('/usuarios/novo', [UserController::class, 'create']);
Route::post('/usuarios', [UserController::class, 'store']);

// Rotas de Usuários (Edição e Atualização)
Route::get('/usuarios/{id}/edit', [UserController::class, 'edit']);
Route::post('/usuarios/{id}', [UserController::class, 'update']);

// Rotas da agenda de eventos
Route::get('/eventos', [EventosController::class, 'index']);
Route::get('/eventos/novo', [EventosController::class, 'create']);
Route::post('/eventos', [EventosController::class, 'store']); 

// Rota de teste
Route::get('/teste-orm', function(){
    User::create([
        'name' => 'Ana clara Santos',
        'email' => 'ana2.santos@escola.sp.gov.br',
        'password' => '12345678'
    ]);

    return User::all();
});



// Rotas de produtos
Route::get('/produtos', [ProdutoController::class, 'index']);
Route::post('/produtos', [ProdutoController::class, 'store']);

// Rota de exclusão (DELETE)
Route::delete('/usuarios/{id}', [UserController::class, 'destroy']);