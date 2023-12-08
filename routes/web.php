<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GunungApiActivityController;

Route::get('/', function () {
    return view('index');
});

// Routes for Gunung Api Activity
Route::get('/gunungapiactivity', [GunungApiActivityController::class, 'index'])->name('gunungapiactivity.index');
Route::post('/gunungapiactivity', [GunungApiActivityController::class, 'store'])->name('gunungapiactivity.store');
Route::get('/gunungapiactivity/{id}', [GunungApiActivityController::class, 'show'])->name('gunungapiactivity.show');
Route::get('/gunungapiactivity/create', [GunungApiActivityController::class, 'create'])->name('gunungapiactivity.create');
Route::put('/gunungapiactivity/{id}', [GunungApiActivityController::class, 'update'])->name('gunungapiactivity.update');
Route::delete('/gunungapiactivity/{id}', [GunungApiActivityController::class, 'destroy'])->name('gunungapiactivity.destroy');
