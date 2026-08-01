<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ParentsController;

Route::get('/', function () {
    return view('home');
});

Route::post('/students', [StudentsController::class, 'store']);

Route::get('/students', [StudentsController::class, 'index']);

Route::get('/students/{id}', [StudentsController::class, 'show']);

Route::put('/students/{id}', [StudentsController::class, 'update']);

Route::delete('/students/{id}', [StudentsController::class, 'destroy']);

Route::post('/parents', [ParentsController::class, 'store']);

Route::get('/parents', [ParentsController::class, 'index']);

Route::get('/parents/{id}', [ParentsController::class, 'show']);

Route::put('/parents/{id}', [ParentsController::class, 'update']);

Route::delete('/parents/{id}', [ParentsController::class, 'destroy']);
