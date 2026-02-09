<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HotelController extends Controller
{
    public function index(Request $request)
    {
        $h = Hotel::where('statut', 'approved');

    
         $hotels = $h->paginate(6);

        return view('index', compact('hotels'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function edit(Hotel $hotel)
    {

    }

    public function update(Request $request, Hotel $hotel)
    {

    }

    public function destroy(Hotel $hotel)
    {

    }

    public function recherche(Request $request){
 if (request('search')) {
        $hotels = hotel::where('name', 'like', '%' . request('search') . '%')->get();
    } else {
        $hotel = hotel::all();
    }

    }
}

