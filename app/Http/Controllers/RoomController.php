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
    public function index(Request $request){
        $query = Room::with('tags', 'properties');
        if ($tagId = $request->get('tag')) {
        $query->whereHas('tags', fn($q) => $q->where('id', $tagId));
      }
        if ($propertyId = $request->get('property')) {
        $query->whereHas('properties', fn($q) => $q->where('id',$propertyId));
    }
        $rooms = $query->get();
        $allTags = Tag::all();
        $allProperties = Property::all();
    return view('rooms.index', compact('rooms', 'allTags','allProperties'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

