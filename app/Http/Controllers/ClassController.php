<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\ParentDetail;
use App\Models\ClassModel;

class ClassController extends Controller
{
    public function index()
    {
        $classes = ClassModel::with('teacher_detail')->get();
        return response()->json($classes);
    }

    public function show($id)
    {
        $class = ClassModel::find($id);
        if (!$class) {
            return response()->json(['message' => 'Class not found'], 404);
        }
        return response()->json($class);
    }

    public function store(Request $request)
    {
        // Directly get the data from the request
        $data = $request->all();

        $class = ClassModel::create($data);

        // Return a response, typically JSON
        return response()->json([
            'message' => 'Class created successfully',
            'class' => $class->id,
            'name' => $class->name,
            'description' => $class->description
        ], 201); // HTTP status code 201: Created
    }

}