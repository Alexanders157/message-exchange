<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::get('/create', [MessageController::class, 'create']);
Route::post('/store', [MessageController::class, 'store'])->name('store');
Route::get('/{slug}', [MessageController::class, 'show'])->name('show');
