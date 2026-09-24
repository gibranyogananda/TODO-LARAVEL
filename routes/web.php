<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

// Halaman utama - menampilkan semua ToDo
Route::get('/', [TodoController::class, 'index']);

// Halaman form tambah ToDo
Route::get('/todos/create', [TodoController::class, 'create']);

// Menyimpan ToDo baru
Route::post('/todos', [TodoController::class, 'store']);

// Halaman form edit ToDo
Route::get('/todos/{id}/edit', [TodoController::class, 'edit']);

// Menyimpan perubahan ToDo
Route::put('/todos/{id}', [TodoController::class, 'update']);

// Menghapus ToDo
Route::delete('/todos/{id}', [TodoController::class, 'destroy']);