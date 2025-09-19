<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiemThiController extends Controller
{
    public function displayDiemthi()
    {
        $diemthi = Diemthi:: All();

        return view('Diemthi', compact('diemthi', 'students'));
    }
}