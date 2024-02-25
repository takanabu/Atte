<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\StampingController;
use App\Http\Controllers\AttendanceController;

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::post('/login', [AuthenticatedSessionController::class, 'store']); 
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']); 

Route::middleware('auth')->group(function () {
     Route::get('/', [AuthController::class, 'index']);
     Route::post('/work/start', [StampingController::class, 'start_work']);
     Route::post('/work/end', [StampingController::class, 'end_work']);
     Route::post('/break/start', [StampingController::class, 'start_break']);
     Route::post('/break/end', [StampingController::class, 'end_break']);
     Route::get('/attendance', [AttendanceController::class, 'index']);
     Route::post('/attendance', [AttendanceController::class, 'store']);
});
