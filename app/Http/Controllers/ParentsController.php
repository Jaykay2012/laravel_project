<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\ParentDetail;

class ParentsController extends Controller
{
    public function index()
    {
        $parents = ParentDetail::with('student')->get();
        return response()->json($parents);
    }
    public function show($id)
    {
        $parents = ParentDetail::find($id);
        if (!$parents) {
            return response()->json(['message' => 'Parent not found'], 404);
        }
        return response()->json($parents);
    }

    public function store(Request $request)
    {
        // Directly get the data from the request
        $data = $request->all();

        $parents = ParentDetail::create($data);

        // Return a response, typically JSON
        return response()->json([
            'message' => 'Parent created successfully',
            'parents' => $parents->id,
            'first_name' => $parents->first_name
        ], 201); // HTTP status code 201: Created
    }

    public function update(Request $request, $id)
    {
        $parents = ParentDetail::find($id);
        if (!$parents) {
            return response()->json(['message' => 'Parent not found'], 404);
        }

        $data = $request->all();
        $parents->update($data);

        return response()->json([
            'message' => 'Parent created successfully',
            'parents' => $parents->id,
            'first_name' => $parents->first_name
        ], 201); // HTTP status code 201: Created
    }

    public function destroy($id)
    {
        $parents = ParentDetail::find($id);
        if (!$parents) {
            return response()->json(['message' => 'Parent not found'], 404);
        }

        $parents->delete();
        return response()->json(['message' => 'Parent deleted successfully']);
    }
}
