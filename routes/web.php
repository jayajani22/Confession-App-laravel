<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfessionController;

Route::get('/', [ConfessionController::class, 'create']);
Route::post('/store', [ConfessionController::class, 'store']);
Route::get('/confessions', [ConfessionController::class, 'index']);
Route::post('/delete/{id}', [ConfessionController::class, 'destroy']);
