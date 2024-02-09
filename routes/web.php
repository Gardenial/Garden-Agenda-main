<?php

use Illuminate\Support\Facades\Route;

/* Login */
Route::get('/login', [\App\Http\Controllers\login::class, 'login']);
Route::get('/login/salvar', [\App\Http\Controllers\login::class, 'store']);
/* Index */
Route::get('/index', [App\Http\Controllers\index::class, 'index']);
/* Schedule */
Route::get('/schedule/salvar', [App\Http\Controllers\Schedule::class,'store']);
/* CRUD*/
Route::get('/cadastrar', [App\Http\Controllers\cadastrar::class, "cadastrar"]);
Route::get('/schedule',  [App\Http\Controllers\Schedule::class,'consultar']);
Route::get('/editar/{id}',[App\Http\Controllers\Schedule::class,'editar']);
Route::get('/atualizar/{id}'  ,[App\Http\Controllers\Schedule::class,'atualizar']);
Route::get('/excluir/{id}', [App\Http\Controllers\Schedule::class,'excluir']);
