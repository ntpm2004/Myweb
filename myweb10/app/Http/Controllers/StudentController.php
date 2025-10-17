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

    public function create()
    {
        return view('add_student');
    }

    public function store(Request $request)
    {
        StudentModel::create([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'class' => $request->input('class'),
        ]);

        return redirect('students')->with('success', 'Đã thêm học sinh mới thành công!');
    }


    //read
    public function read($id)
    {
        $student = StudentModel::find($id);

        if (!$student) {
            return redirect()->back()->with('error', 'Không tìm thấy sinh viên!');
        }

        return view('student_detail', compact('student'));
    }

    //post
    public function saveStudent(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $age = $request->input('age');
        $class = $request->input('class');

        $student = StudentModel::findOrFail($id);

        $student->update([
            'name' => $name,
            'age' => $age,
            'class' => $class,
        ]);

        $students = StudentModel::all();
        return view('student', compact('students'));
    }

    //xoa
    public function deleteStudent($id)
    {
        $student = StudentModel::findOrFail($id);
        $student->delete();

        $students = StudentModel::all();
        return view('student', compact('students'));
    }
}
