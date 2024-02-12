<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;


Route::get('/voter', [VoterController::class, 'viewVoter']);

Route::get('/subjectadmin', [SubjectController::class, 'viewsubjectadmin']);
Route::get('/subjectstuden', [SubjectController::class, 'viewsubjectstuden']);
Route::get('/subjectteacher', [SubjectController::class, 'viewsubjectteacher']);

Route::get('/useradmin', [UserController::class, 'viewuseradmin']);
Route::get('/userstuden', [UserController::class, 'viewuserstuden']);
Route::get('/userteacher', [UserController::class, 'viewuserteacher']);

Route::get('/hallo', function () {
    return 'Hallo World';
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return ('Ini halaman About');
});
Route::get('/services', function () {
    return view ('servis');
});
Route::get('/desy', function () {
    return view ('desy');
});
