<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductoController;

// Rutas públicas
Route::apiResource('productos', ProductoController::class);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::apiResource('categorias', App\Http\Controllers\CategoriaController::class);
Route::apiResource('clientes', App\Http\Controllers\ClienteController::class);


// Rutas protegidas
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    // Ruta de ejemplo para verificar el token
    Route::get('/perfil', function (Request $request) {
        return response()->json($request->user());
    });
});


