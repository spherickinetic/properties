<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Property;

class RoomController extends Controller
{ 
    public function show($propertyId)
    {
        return Property::find($propertyId)->rooms;
    }

    public function store(Request $request)
    {
        return Room::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);
        $room->update($request->all());

        return $room;
    }

    public function delete(Request $request, $id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return response()->json(null, 204);
    }
}
