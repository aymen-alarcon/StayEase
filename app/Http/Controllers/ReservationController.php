<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Room $room)
    {
        return view("Reservation.index", compact("room"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = Request::validate([
            "date_debut" => "required",
            "date_fin" => "required",
            "user_id" => "required",
            "room_id" => "required",
            "status" => "not paid",
        ]);

        Reservation::create($validate);

        return redirect()->route("Home");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        $validate = Request::validate([
            "status" => "paid",
        ]);

        Reservation::update($validate);

        return redirect()->route("Home");
    }
}
