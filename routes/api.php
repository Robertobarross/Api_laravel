<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/produtos', [ProdutoController::class, 'index']); // Traz os produtos do bd
Route::post('/produtos', [ProdutoController::class, 'store']); // Faz o cadastro no bd
Route::get('/produtos/{id}', [ProdutoController::class, 'show']); // retorna um registro específico através do $id
Route::put('/produtos/{id}', [ProdutoController::class, 'update']); // Edita um registro em específico
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy']); // exclui um registro
Route::get('/produtos/search/{produto}', [ProdutoController::class, 'search']); // Faz a consulta pelo nome do produto
