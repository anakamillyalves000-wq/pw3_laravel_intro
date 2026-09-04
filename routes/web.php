<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route:: view('/landing', 'landing');
Route:: view('/admin', 'admin.dashboard');

# Rota para carregar o formulário (GET)
Route::get('/usuarios/novo', [UserController::class, 'create']);
# Rota para salvar os dados enviados (POST)
Route::post('usuarios', [UserController::class, 'store']);

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