<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::post('/login', [AuthenticatedSessionController::class, 'store']); 
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']); 


Route::middleware('auth')->group(function () {
     Route::get('/', [AuthController::class, 'index']);
  });


