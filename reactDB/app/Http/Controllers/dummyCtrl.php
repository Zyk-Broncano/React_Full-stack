<?php

namespace App\Http\Controllers;

use App\Models\personData;
use Illuminate\Http\Request;

class dummyCtrl extends Controller
{

    public function updateData(Request $request, $name_id)
    {
        try {
            $person = personData::findOrFail($name_id);

            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'age'  => 'required|integer|min:0',
                'status' => 'required|in:Active,Inactive'

        ]);

        $person->update($validated);
        return response()->json(['person' => $person], 200);

    } catch (\Exception $e) {
        return response()->json(['error' => 'Failed to update person.', 'message' => $e->getMessage()], 500);
    }
    }

    public function deleteData(Request $request, $name_id)
    {
        try {
            $person = personData::findOrFail($name_id);
            $person->delete();

            return response()->json(['message' => 'Person delete succesfully!']);
        }catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete person.', 'message' => $e->getMessage()], 500);
        }
    }

    public function showData(Request $request)
    {
        try{
            $people = personData::all();
            return response()->json($people);
        }catch(\Exception $e){
            return response()->json(['error' => 'Failed to show data.', 'message' => $e->getMessage()], 500);
        }
    }

    public function storeData(Request $request)
    {
        try{
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'age' => 'required|integer',
                'status' => 'required|string'
            ]);

            $person = new personData();
            $person->name = $validated['name'];
            $person->age = $validated['age'];
            $person->status = $validated['status'];
            $person->save();

            return response()->json(['message' => 'Person added successfully!', 'person' => $person], 201);
        }catch (\Exception $e){
            return response()->json(['error' => 'Failed to add person.', 'message' => $e->getMessage()], 500);
        }

    }
}

