<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CorretorController;

Route::resource('/corretores', CorretorController::class)->except(['edit']);
Route::get('/corretores/{corretor}/edit', [CorretorController::class, 'edit'])->name('corretores.edit');

