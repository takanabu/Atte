<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');

Route::middleware('auth')->group(function () {
     Route::get('/', [AuthController::class, 'index']);
  });


