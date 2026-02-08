<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use Illuminate\Support\Facades\Auth;
class GerantController extends Controller
{
    public function index (){
        $hotels=Hotel::where('user_id',Auth::id())->get();


        return view('gerant.index',compact('hotels'));
    }

    public function create(){
        return view('gerant.index');
    }
    public function store (){

    }
}

