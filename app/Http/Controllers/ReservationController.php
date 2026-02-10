<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use DateTime;
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
    public function store(Request $request, Reservation $reservation, Room $room)
    {
        $validate = $request->validate([
            "date_debut" => "required",
            "date_fin" => "required",
            "room_id" => "required",
        ]);

        $total_days = date_diff(new DateTime($validate["date_debut"]), new DateTime($validate["date_fin"]));

        if($total_days->days > 0){
            $validate["total_price"] = $total_days->days * $room->price_per_night;
        }else{
            return redirect()->route("Reservation.index")->with("failed", "you have inserted a checkout date that's before your checking date");
        }

        $validate["user_id"] = Auth::id();

        $reservation = Reservation::create($validate);

        return redirect()->route("payment.create", $reservation->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Reservation $reservation)
    {
        $reservation->update(["status" => "paid"]);

        return redirect()->route("Home");
    }
}