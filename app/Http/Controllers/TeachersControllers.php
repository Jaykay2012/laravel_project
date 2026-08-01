<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\ParentDetail;
use App\Models\TeachersModel;

class TeachersControllers extends Controller
{
    public function index()
    {
        $teachers = TeachersModel::with('teachers')->get();
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

        return response()->json([
            'message' => 'Teacher updated successfully',
            'teachers' => $teachers->id,
            'name' => $teachers->name
        ], 200); // HTTP status code 200: OK
    }

    public function destroy($id)
    {
        $teachers = TeachersModel::find($id);
        if (!$teachers) {
            return response()->json(['message' => 'Teacher not found'], 404);
        }

        $teachers->delete();

        return response()->json(['message' => 'Teacher deleted successfully'], 200); // HTTP status code 200: OK
    }
}