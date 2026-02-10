<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class AdminController extends Controller
{
    public function index(){

      

        $hotels=Hotel::all();
        return view('dashboard.index',compact('hotels'));

    }

    public function create(){
        return view('admin.create');
    }
    public function show(){}

    public function destroy(){
    }
}

