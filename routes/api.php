<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/movies', [MovieController::class, 'index']); // Traer todas las películas
Route::get('/movies/{id}', [MovieController::class, 'show']); // Traer película por ID
Route::post('/movies', [MovieController::class, 'store']); // Crear nueva película
Route::put('/movies/{id}', [MovieController::class, 'update']);   // ✅ Actualizar película
Route::delete('/movies/{id}', [MovieController::class, 'destroy']); // ✅ Eliminar película
