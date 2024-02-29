<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Rute untuk menampilkan daftar task
Route::get('/task', [TaskController::class,'index']);

// Rute untuk menampilkan form untuk membuat task baru
Route::get('/task/create', [TaskController::class,'create']);

// Rute untuk menyimpan task baru
Route::post('/task/store', [TaskController::class,'store']);

// Rute untuk menampilkan detail task berdasarkan ID
Route::get('/task/{task}',[TaskController::class,'show']);

// Rute untuk menampilkan form edit task berdasarkan ID
Route::get('task/{id}/edit',[TaskController::class,'edit']) ;

// Rute untuk menyimpan perubahan pada task
Route::put('task/{task}', [TaskController::class,'update']);

// Rute untuk menghapus task berdasarkan ID
Route::delete('task/{task}', [TaskController::class,'delete']);


Route::get('/', function () {
    return view('welcome');
});
