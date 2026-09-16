<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EventosController;

Route::get('/', function () {
    return view('home');
});

Route:: view('/landing', 'landing');
Route:: view('/admin', 'admin.dashboard');

# Rotas da agenda de eventos

# Rotas da agenda de eventos
Route::get('/eventos', [EventosController::class, 'index']);
Route::get('/eventos/novo', [EventosController::class, 'create']);
Route::post('/eventos', [EventosController::class, 'store']); 

route::get('/teste-orm', function(){
    User::create([
        'name' => 'Ana clara Santos',
        'email' => 'ana2.santos@escola.sp.gov.br',
        'password' => '12345678'

    ]);

    return User:: all();

});

Route::get('/produtos', [ProdutoController::class, 'index']);
Route::post('/produtos', [ProdutoController::class, 'store']);