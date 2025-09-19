<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function displayStudent()
    {
        $students = Student::All();

        return view('Student', compact('students'));
    }
}