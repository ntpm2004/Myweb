<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            ['id' => 1, 'name' => 'Ninh Phương Mai', 'age' => 20],
            ['id' => 2, 'name' => 'Mai Phương Ninh', 'age' => 21]
        ];

        return view('Student', compact('students'));
    }
}