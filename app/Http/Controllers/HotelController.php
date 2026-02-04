<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
      public function index()
    {
        $hotels = Hotel::paginate(10);
        return view("admin.dashboard", compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hotels.create');
    }


    public function store(Request $request)
{
    $h=$request->validate([
        'name'=> 'required|string|max:255',
        'addresse'=>'required|string|max:255',
        'rating' =>'required|integer|min:1|max:5',
        'images'=>'image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $hotel = Hotel::create([
        'name'        => $request->name,
        'addresse'    => $request->addresse,
        'rating'      => $request->rating,

    ]);
            $hotel->images()->associate($images);
              $hotel->save();

        }
    }
    return view('gerant');






    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {
        return view('hotels', compact('hotel'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Hotel $hotel)
    {
         $valid = $request->validate([
            'name'=> 'required|string|max:255',
            'addresse'=> 'required|string|max:255',
            'rating' => 'required|integer',
            'description'=> 'required|string',
            'image'=> 'nullable|image|mimes:jpeg,jpg,png|max:2048'
        ]);


        if($request->Hasfile('image')){
            $file = $request->file('name');
            $name =time().'_'.$file->getClientOriginalName();
            $path = $file->storeAS('images', $name, 'public');
            $valid['image'] = $path;
        }

        $hotel->update();
        return redirect()->route('hotels.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect()->route('hotels.index');
    }
}
