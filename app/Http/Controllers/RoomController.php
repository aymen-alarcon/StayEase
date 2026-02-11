<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Property;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Room::with('tags', 'properties');
        if ($tagId = $request->get('tag')) {
            $query->whereHas('tags', fn($q) => $q->where('tags.id', $tagId));
        }
        if ($propertyId = $request->get('property')) {
            $query->whereHas('properties', fn($q) => $q->where('properties.id', $propertyId));
        }

        $rooms = $query->get();
        $allTags = Tag::all();
        dd($query);
        $allProperties = Property::all();
        return view('rooms.index', compact('rooms', 'allTags', 'allProperties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();
        $properties = Property::all();

        return view('rooms.create', compact('tags', 'properties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'hotel_id' => 'required|integer',
            'number' => 'required|string',
            'price_per_night' => 'required|numeric|min:0',
            'capacity' => 'required|integer|min:1',
            'description' => 'nullable|string',
        ]);

        $room = Room::create($validated);
        $room->tags()->sync($request->get('tags', []));
        $room->properties()->sync($request->get('properties', []));
        return redirect()->route('rooms.show', $room);
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        $room->load('tags', 'properties');
        return view('rooms.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $rooms = Room::findOrFail($id);
        $tags = Tag::all();
        $properties = Property::all();

        return view('rooms.edit', compact('rooms', 'tags', 'properties'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'number' => 'required|string',
            'price_per_night' => 'required|numeric|min:0',
            'capacity' => 'required|integer|min:1',
            'description' => 'nullable|string',
        ]);

        $rooms = Room::findOrFail($id);
        $rooms->update($data);
        // dd($rooms);
        // return redirect()->route('rooms.show');
        return redirect()->route('rooms.index',$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect()->route('rooms.index');
    }
}

