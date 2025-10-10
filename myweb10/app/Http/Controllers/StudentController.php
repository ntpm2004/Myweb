<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;

class StudentController extends Controller
{
    public function displayStudent()
    {
        $students = StudentModel::all();

        return view('Student', compact('students'));
    }
}
