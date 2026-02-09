<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function store(Request $request, Reservation $reservation)
    {
        $validate = $request->validate([
            "date_debut" => "required",
            "date_fin" => "required",
            "room_id" => "required",
            "status" => "required",
        ]);

        $validate["user_id"] = Auth::id();

        $reservation->create($validate);

        return redirect()->route("payment.create");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        $validate = $request->validate([
            "status" => "paid",
        ]);

        $reservation->update($validate);

        return redirect()->route("Home");
    }
}
