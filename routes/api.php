<?php

use App\Http\Controllers\BukuCOntroller;
use App\Http\Controllers\KategoriController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('bukus/search', [BukuCOntroller::class, 'search']);
Route::apiResource('kategoris', KategoriController::class);
Route::apiResource('bukus', BukuCOntroller::class);