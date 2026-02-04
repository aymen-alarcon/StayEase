<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Reservation::all();
        return view("Admin.Categories.Index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Admin.Categories.Create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "name" => "required"
        ]);

        Reservation::create($validate);

        return redirect()->route("Admin.Categories.Create");
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $Reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $Reservation)
    {
        $Reservation = Reservation::all();
        return view("Admin.Categories.edit", compact("Reservation"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $Reservation)
    {
        $validate = $request->validate([
            "name" => "required"
        ]);

        Reservation::update($validate);

        return redirect()->route("Admin.Categories.Create");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $Reservation)
    {
        $Reservation->delete();

        return redirect()->route("Admin.Categories.Create");
    }
}