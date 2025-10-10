<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;

class apiController extends Controller
{
    /**
     * Display a listing of the resource.
     * GET /api/students
     */
    public function index()
    {
        $students = StudentModel::all();
        return response()->json($students);
    }

    /**
     * Store a newly created resource in storage.
     * POST /api/students
     */
    public function studentStore(Request $request)
    {
        // Validate dữ liệu trước khi thêm
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'class' => 'required|string|max:50',
        ]);

        // Tạo bản ghi mới
        $student = StudentModel::create($validated);

        return response()->json($student, 201);
    }

    /**
     * Display the specified resource.
     * GET /api/students/{id}
     */
    public function show($id)
    {
        $student = StudentModel::findOrFail($id);
        return response()->json($student);
    }

    /**
     * Update the specified resource in storage.
     * PUT/PATCH /api/students/{id}
     */
    public function update(Request $request, $id)
    {
        $student = StudentModel::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'age' => 'sometimes|integer',
            'class' => 'sometimes|string|max:50',
        ]);

        $student->update($validated);

        return response()->json($student);
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /api/students/{id}
     */
    public function destroy($id)
    {
        $student = StudentModel::findOrFail($id);
        $student->delete();

        return response()->json(null, 204);
    }
}
