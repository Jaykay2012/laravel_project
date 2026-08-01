<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\TeachersControllers;
use App\Http\Controllers\ClassController;


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

Route::post('/teachers', [TeachersControllers::class, 'store']);

Route::get('/teachers', [TeachersControllers::class, 'index']);

Route::get('/teachers/{id}', [TeachersControllers::class, 'show']);

Route::put('/teachers/{id}', [TeachersControllers::class, 'update']);

Route::delete('/teachers/{id}', [TeachersControllers::class, 'destroy']);

Route::post('/classes', [ClassController::class, 'store']);

Route::get('/classes', [ClassController::class, 'index']);

Route::get('/classes/{id}', [ClassController::class, 'show']);

Route::put('/classes/{id}', [ClassController::class, 'update']);

Route::delete('/classes/{id}', [ClassController::class, 'destroy']);

