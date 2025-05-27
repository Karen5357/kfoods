<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/pedido', function () {
    return view('pedido');
});

use App\Http\Controllers\FormularioController;

Route::get('/form', [FormularioController::class, 'mostrarFormulario']);
Route::post('/form', [FormularioController::class, 'procesarFormulario']);
