<?php

use App\Http\Controllers\TeaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




// GET TASK


Route::get('/tasks',[TeaskController::class, 'index']);

Route::get('/tasks/{id}',[TeaskController::class, 'show']);

// POST TASK
Route::post('/tasks/store',[TeaskController::class, 'store']);

// UPDATE TASK

Route::put('/tasks/update/{id}',[TeaskController::class, 'update']);

// DELETE TASK 
Route::delete('/tasks/destroy/{id}',[TeaskController::class, 'destroy']);



