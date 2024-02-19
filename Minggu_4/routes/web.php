<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/task', [TaskController::Class,'index']);

Route::get('/', function () {
    return view('welcome');
});
