<?php

use App\Http\Controllers\DiemThiController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

// Route cho Student
Route::resource('students', StudentController::class);

// Route cho DiemThi – chỉ lấy danh sách
Route::get('/diemthi', [DiemThiController::class, 'index'])->name('diemthi.index');