<?php

use App\Http\Controllers\DiemThiController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('students', [StudentController::class, 'displayStudent']);

Route::prefix('api')->group(function () {
    Route::get('students', [apiController::class, 'index']);
    Route::post('students', [apiController::class, 'studentStore']);
    Route::get('students/{id}', [apiController::class, 'show']);
});
