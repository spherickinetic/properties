<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index()
    {
        return Property::all();
    }

    public function store(Request $request)
    {
        return Property::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $property = Property::findOrFail($id);
        $property->update($request->all());

        return $property;
    }

    public function delete(Request $request, $id)
    {
        $property = Property::findOrFail($id);
        $property->delete();

        return response()->json(null, 204);
    }
}
