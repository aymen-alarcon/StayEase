<?php
namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GerantController extends Controller
{
    public function index()
    {
        $hotels = Hotel::where('user_id', Auth::id())->get();

        return view('gerant.index', compact('hotels'));
    }

    public function create()
    {
        return view('gerant.index');
    }
    public function store(Request $r, Hotel $hotel)
    {

        $validated = $r->validate([
            'name'        => 'required|string|max:255',
            'description' => 'required',
            'addresse'    => 'required|string|max:255',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($r->hasFile('images')) {
            foreach ($r->file('images') as $image) {
                $path = $image->store('galleries', 'public');

                $hotel->images()->create([
                    'path' => $path,
                ]);
            }
        }
        Hotel::create($validated);

        return redirect()->route('gerant.index');
    }
    public function edit(Hotel $hotel)
    {
        return view('gerant.edit', compact('hotel'));
    }
    public function update(Request $request, Hotel $hotel)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'required',
            'addresse'    => 'required|string|max:255',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($hotel->image) {
                Storage::disk('public')->delete($hotel->image);
            }
            $validated['image'] = $request->file('image')->store('hotels', 'public');
        }

        $hotel->update($validated);

        return redirect()->route('gerant.index');
    }
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();

        return redirect()->route('gerant.index');
    }
}
