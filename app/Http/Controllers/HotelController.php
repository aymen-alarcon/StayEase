<?php
namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {

        return view('index', [
            'hotels' => $hotels = Hotel::latest()->pagninate(5),
        ]);
    }

    public function store(Request $request)
    {
        $vData = $request->validate([
            'name'    => 'required|max:255',
            'address' => 'required|max:255',
            'rating'  => 'required|min:1|max:5',
        ]);

         Hotel::create($vData);

        return redirect()->route('hotel.index')->with('success', 'Hotel a ete cree');
    }

    public function create()
    {
        return view('create');

    }
    public function show(Hotel $hotel)
    {
        return view('show', compact('hotel'));
    }
    public function update(Hotel $hotel, Request $request)
    {
       $request->validate([
        'name'=>'required',
        'adress'=>'required',
        'rating'=>'required'
       ]);
       $hotel->update($request->all());
       return redirect()->route('hotel.index')->with('sucess');

    }
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect()->route('hotel.index');
    }

}
