<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpeciesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/species', [SpeciesController::class, 'index'])->name('species.index');

Route::get('/species/create', [SpeciesController::class, 'create'])->name('species.create');

Route::post('/species', [SpeciesController::class, 'store'])->name('species.store');

Route::get('/species/{id}/edit', [SpeciesController::class, 'edit'])->name('species.edit');

Route::put('/species/{id}', [SpeciesController::class, 'update'])->name('species.update');

Route::delete('/species/{id}', [SpeciesController::class, 'destroy'])->name('species.destroy');
