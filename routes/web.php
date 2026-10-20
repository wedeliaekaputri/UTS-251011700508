<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SportController;

Route::get('/', [SportController::class, 'home'])->name('sport.home');
Route::get('/sports-list', [SportController::class, 'sportsList'])->name('sport.sports-list');
Route::get('/sports-list/{id}', [SportController::class, 'show'])->name('sport.show');
Route::get('/wellness', [SportController::class, 'wellness'])->name('sport.wellness');
Route::get('/about', [SportController::class, 'about'])->name('sport.about');