<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtkinlikController;

Route::get('/', [EtkinlikController::class, 'index'])->name('index');
Route::get('/add', [EtkinlikController::class, 'create'])->name('create');
Route::post( '/add', [EtkinlikController::class, 'store'])->name('store');
Route::get('/edit/{id}', [EtkinlikController::class, 'show'])->name('show');
Route::post('/edit/{id}', [EtkinlikController::class, 'edit_done'])->name('edit_done');
Route::delete('/edit/{id}', [EtkinlikController::class, 'delete'])->name('delete');
Route::get('/show/{id}', [EtkinlikController::class, 'show_orj'])->name('show_orj');
