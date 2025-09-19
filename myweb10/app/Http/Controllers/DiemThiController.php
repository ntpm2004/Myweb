<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiemThiController extends Controller
{
    public function index()
    {
        // Danh sách điểm
        $marks = [
            ['student_id' => 1, 'subject' => 'Toán',  'score' => 8],
            ['student_id' => 1, 'subject' => 'Văn',   'score' => 7],
            ['student_id' => 2, 'subject' => 'Toán',  'score' => 9],
            ['student_id' => 3, 'subject' => 'Anh',   'score' => 8],
        ];

        $students = [
            1 => ['name' => 'Ninh Phương Mai', 'age' => 20],
            2 => ['name' => 'Mai Phương Ninh', 'age' => 21],
            3 => ['name' => 'Bạn khác',        'age' => 22],
        ];

        return view('Diemthi', compact('marks', 'students'));
    }
}