<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HotelController extends Controller
{
    public function index(Request $request)
    {
<<<<<<< .merge_file_hzocHi
        $hotels = Hotel::where('statut','approved')->where->get();
         return view("gerant.hotels", compact('hotels'));

=======
        $h = Hotel::where('statut', 'approved');

    
         $hotels = $h->paginate(6);

        return view('index', compact('hotels'));
>>>>>>> .merge_file_mILw6m
    }

    public function create()
    {

    }

    public function store(Request $request)
<<<<<<< .merge_file_hzocHi
{
    $h=$request->validate([
        'name'=> 'required|string|max:255',
        'addresse'=>'required|string|max:255',
        'rating' =>'required|integer|min:1|max:5',
        'images'=>'image|mimes:jpg,jpeg,png|max:2048',
    ]);


    $h = Hotel::create([
        'name'        => $request->name,
        'addresse'    => $request->addresse,
        'rating'      => $request->rating,

    ]);

            $h->images()->associate($images);
              $h->save();

            // $hotel->images()->associate($images);
              $hotel->save();



               return view('hotels.index');
        }
    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
=======
    {

    }

>>>>>>> .merge_file_mILw6m
    public function edit(Hotel $hotel)
    {

    }

    public function update(Request $request, Hotel $hotel)
    {

    }

    public function destroy(Hotel $hotel)
    {

    }
<<<<<<< .merge_file_hzocHi
}
=======

    public function recherche(Request $request){
 if (request('search')) {
        $hotels = hotel::where('name', 'like', '%' . request('search') . '%')->get();
    } else {
        $hotel = hotel::all();
    }

    }
}

>>>>>>> .merge_file_mILw6m
