<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/task', [TaskController::Class,'index']);
Route::get('/task/create', [TaskController::Class,'create']);
Route::post('/task/store', [TaskController::Class,'store']);
Route::get('/task/{task}',[TaskController::Class,'show']);
Route::get('task/{id}/edit',[TaskController::Class,'edit']) ;
Route::put('task/{task}', [TaskController::Class,'update']);
Route::delete('task/{task}', [TaskController::Class,'delete']);




Route::get('/', function () {
    return view('welcome');
});
