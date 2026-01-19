<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\ClimaController;

Route::get('/clima', [ClimaController::class, 'index']);
Route::get('/clima/eliminar/{id}', [ClimaController::class, 'eliminar']);