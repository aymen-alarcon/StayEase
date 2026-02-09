<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class AdminController extends Controller
{
    public function index(){
        $hotels=Hotel::where('statut','pending')->get();
        return view('dashboard.index',compact('hotels'));
    }



    public function approve(Hotel $hotel)
    {
        $hotel->update(['status' => 'approved']);

        return redirect()->route('admin.index');
    }

    public function reject(Hotel $hotel)
    {
        $hotel->update(['status' => 'rejected']);

        return redirect()->route('admin.index');
    }



    public function create(){

    }
    public function show(){}

    public function destroy(){

    }
}

