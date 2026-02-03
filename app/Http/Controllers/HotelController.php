<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(){
        $hotels=Hotel::latest()->pagninate(5);
    return view('hotel.index')
    }

    public function store(){

    }
    public function show(){

    }
    public function update(){

    }
    public function destroy(){

    }
}
