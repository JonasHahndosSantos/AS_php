<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('produtos', [ProdutoController::class, 'index']);
Route::get('produtos/create', [ProdutoController::class, 'create']);
Route::post('produtos', [ProdutoController::class, 'store']);
Route::get('produtos/{id}/edit', [ProdutoController::class, 'edit']);
Route::put('produtos/{id}', [ProdutoController::class, 'update']);
Route::delete('produtos/{id}', [ProdutoController::class, 'destroy']);

Route::get('categoria', [CategoriaController::class, 'index']);
Route::get('categoria/create', [CategoriaController::class, 'create']);
Route::post('categoria', [CategoriaController::class, 'store']);
Route::get('categoria/{id}/edit', [CategoriaController::class, 'edit']);
Route::put('categoria/{id}', [CategoriaController::class, 'update']);
Route::delete('categoria/{id}', [CategoriaController::class, 'destroy']);

Route::get('fornecedor', [FornecedorController::class, 'index']);
Route::get('fornecedor/create', [FornecedorController::class, 'create']);
Route::post('fornecedor', [FornecedorController::class, 'store']);
Route::get('fornecedor/{id}/edit', [FornecedorController::class, 'edit']);
Route::put('fornecedor/{id}', [FornecedorController::class, 'update']);
Route::delete('fornecedor/{id}', [FornecedorController::class, 'destroy']);

