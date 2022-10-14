<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

/*
@@ -13,6 +14,8 @@
|
*/

// CRUD
Route::get('produtos', [ProdutosController::class, 'index']);
Route::get('produtos/novo', [ProdutosController::class, 'create']);
Route::post('produtos/salvar', [ProdutosController::class, 'store']);
Route::get('produtos/{id}', [ProdutosController::class, 'show']);

Route::get('home', [HomeController::class, 'index']);
Route::get('users', [HomeController::class, 'users']);

Route::get('/', function () {
    return view('welcome');
});