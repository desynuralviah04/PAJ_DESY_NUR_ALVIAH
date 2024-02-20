<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/task', [TaskController::Class,'index']);
Route::get('/task/create', [TaskController::Class,'create']);
Route::post('/task/store', [TaskController::Class,'store']);

Route::get('/', function () {
    return view('welcome');
});
