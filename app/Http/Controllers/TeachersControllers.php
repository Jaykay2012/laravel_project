<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\ParentDetail;
use App\Models\TeachersModel;
use App\Mail\TeacherEmail;
use App\Mail\TeacherUpdatedEmail;
use Illuminate\Support\Facades\Mail;

class TeachersControllers extends Controller
{
    public function index()
    {
        $teachers = TeachersModel::with('class_detail')->get();
        return response()->json($teachers);
    }
    public function show($id)
    {
        $teachers = TeachersModel::find($id);
        if (!$teachers) {
            return response()->json(['message' => 'Teacher not found'], 404);
        }
        return response()->json($teachers);
    }

    public function store(Request $request)
    {
        // Directly get the data from the request
        $data = $request->all();

        $teachers = TeachersModel::create($data);

        Mail::to($teachers->email)->send(new \App\Mail\TeacherEmail($teachers->toArray()));

        // Return a response, typically JSON
        return response()->json([
            'message' => 'Teacher created successfully',
            'teachers' => $teachers->id,
            'name' => $teachers->name
        ], 201); // HTTP status code 201: Created
    }

    public function update(Request $request, $id)
    {
        $teachers = TeachersModel::find($id);
        if (!$teachers) {
            return response()->json(['message' => 'Teacher not found'], 404);
        }

        $data = $request->all();
        $teachers->update($data);

        Mail::to($teachers->email)->send(new \App\Mail\TeacherUpdatedEmail($teachers->toArray()));


        return response()->json([
            'message' => 'Teacher updated successfully',
            'teachers' => $teachers->id,
            'name' => $teachers->name
        ], 200); // HTTP status code 200: OK
    }

    public function destroy(Request $request, $id)
    {

        $teachers = TeachersModel::find($id);
        if (!$teachers) {
            return response()->json(['message' => 'Teacher not found'], 404);
        }
        Mail::to($teachers->email)->send(new \App\Mail\TeacherFiredEmail($teachers->toArray()));


        $teachers->delete();

        return response()->json(['message' => 'Teacher deleted successfully'], 200); // HTTP status code 200: OK
    }
}