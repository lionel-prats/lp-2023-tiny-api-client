<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ClientController;


Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/clientes', [ClientController::class, 'index'])->name('client.index');
Route::get('/clientes/nuevo-cliente', [ClientController::class, 'create'])->name('client.create');
Route::post('/clientes/nuevo-cliente', [ClientController::class, 'store']);
Route::get('/clientes/editar-cliente/{client_id}', [ClientController::class, 'edit'])->name('client.edit');
Route::post('/clientes/editar-cliente', [ClientController::class, 'update'])->name('client.update');
Route::get('/clientes/borrar-cliente/{client_id}', [ClientController::class, 'destroy'])->name('client.delete');
