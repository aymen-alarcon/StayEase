<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Http\Request as HttpRequest;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class HotelController extends Controller
{
    public function index(){

    return view('index',[
        'hotels'=> $hotels=Hotel::latest()->pagninate(5)
    ]);
    }

    public function store( Request $request,Hotel $hotel){


      $request->validate([
      'name' => 'required|max:255',
      'address' => 'required|max:255',

      'category_id' => 'required',
      'workingday' => 'required',
      'content' => 'required'
      ]);
      Hotel::create($request->all());
    return redirect()->route('hotel.index');
    }

    public function show(Hotel $hotel){
    return view('show',compact('hotel'));
    }
    public function update(Hotel $hotel,Request $request){
        $hotel->update($request->validated());
    return redirect()->back()
            ->withSucess('Hotel a ete  modifie');

    }
    public function destroy(Hotel $hotel){
    $hotel->delete();
    return redirect()->route('hotel.index');
    }
    public function create(){
        return view('create');

    }

}
