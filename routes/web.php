<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', [\App\Http\Controllers\login::class, 'login']);
Route::get('/login/salvar', [\App\Http\Controllers\login::class, 'store']);
Route::get('/index', [App\Http\Controllers\index::class, 'index']);
Route::post('/schedule', [App\Http\Controllers\Schedule::class,'index']);
Route::get('/schedule/salvar', [App\Http\Controllers\Schedule::class,'store']);