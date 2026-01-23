<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\TelefoneController;

Route::get('/', function () {
    return view('index');
});

Route::resource('cargos', CargoController::class);
Route::resource('funcionarios', FuncionarioController::class);
Route::resource('telefones', TelefoneController::class);
