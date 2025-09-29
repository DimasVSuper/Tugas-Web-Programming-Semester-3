<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route Get
Route::get('/', [App\Http\Controllers\HalloController::class, 'halo']);
Route::get('/beranda', [App\Http\Controllers\HalloController::class, 'beranda']);
Route::get('/biodata', [App\Http\Controllers\HalloController::class, 'biodata']);
Route::get('/halo', [App\Http\Controllers\HalloController::class, 'halo']);
Route::get('/profile', [App\Http\Controllers\HalloController::class, 'profile']);
