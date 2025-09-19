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

Route::get('/student', 'App\Http\Controllers\StudentController@displayStudent');
Route::get('/diemthi', 'App\Http\Controllers\DiemThiController@displayDiemthi');
