<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class AdminController extends Controller
{
    public function index(){
        $hotels=Hotel::where('statut','pending')->get();
        return view('admin.hotel',compact('hotels'));
    }
        public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function hotels()
    {
        $hotels = Hotel::where('status', 'pending')
            ->with('user')
            ->get();

        return view('admin.hotels', compact('hotels'));
    }

    public function approve(Hotel $hotel)
    {
        $hotel->update(['status' => 'approved']);

        return redirect()->route('admin.hotels');
    }

    public function reject(Hotel $hotel)
    {
        $hotel->update(['status' => 'rejected']);

        return redirect()->route('admin.hotels');
    }



    public function create(){
        return view('admin.create');
    }
    public function show(){}

    public function destroy(){

    }
}

