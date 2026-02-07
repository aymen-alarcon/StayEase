<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HotelController extends Controller
{
    public function index(Request $request)
    {
        $q = Hotel::where('statut', 'approved');

        //  $hoteladdress = Hotel::where('status', 'approved')->select('addresse') ->pluck('address');



         $hotels = $q->paginate(6);

        return view('gerant.index', compact('hotels'));
    }

    public function create()
    {
        return view('gerant.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'addresse' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('hotels', 'public');
        }

        Hotel::create($validated);

        return redirect()->route('hotels.index');
    }

    public function edit(Hotel $hotel)
    {
        return view('gerant.edit', compact('hotel'));
    }

    public function update(Request $request, Hotel $hotel)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'addresse' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($hotel->image) {
                Storage::disk('public')->delete($hotel->image);
            }
            $validated['image'] = $request->file('image')->store('hotels', 'public');
        }

        $hotel->update($validated);

        return redirect()->route('hotels.index');
    }

    public function destroy(Hotel $hotel)
    {
        $hotel->delete();

        return redirect()->route('hotels.index');
    }
}
