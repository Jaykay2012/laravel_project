<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\ParentDetail;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

class StudentsController extends Controller
{
    public function index()
    {
        // Pull up all students with their parent details
        $students = Student::with('parent_detail', 'class_detail', 'teacher_detail')->get();
        return response()->json($students);
    }
    public function show($id)
    {
        $students = Student::find($id);
        if (!$students) {
            return response()->json(['message' => 'Student not found'], 404);
        }
        return response()->json($students);
    }

    public function store(Request $request)
    {
        // Directly get the data from the request
        $data = $request->all();

        $students = Student::create($data);

        // Send welcome email
        Mail::to($students->email)->send(new \App\Mail\WelcomeEmail($students->toArray()));

        // Return a response, typically JSON
        return response()->json([
            'message' => 'Student created successfully',
            'students' => $students->id,
            'first_name' => $students->first_name,
            'last_name' => $students->last_name
        ], 201); // HTTP status code 201: Created
    }

    public function update(Request $request, $id)
    {
        $students = Student::find($id);
        if (!$students) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        $data = $request->all();
        $students->update($data);

        return response()->json([
            'message' => 'Student updated successfully',
            'students' => $students->id,
            'first_name' => $students->first_name,
            'parent_id' => $students->parent_id,
            'age' => $students->age
        ], 201); // HTTP status code 201: Created
    }

    public function destroy($id)
    {
        $students = Student::find($id);
        if (!$students) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        $students->delete();
        return response()->json(['message' => 'Student deleted successfully']);
    }
}
