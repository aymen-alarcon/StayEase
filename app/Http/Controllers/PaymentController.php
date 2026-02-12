<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Reservation;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Reservation $reservation)
    {
        return view("stripe.index", compact("reservation"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Payment $payment, Reservation $reservation)
    {
        $validate = $request->validate([
            "method" => "required",
            "total_price" => "required",
            "email" => "required",
            "status" => "required",
            "name" => "required",
            "amount" => "required",
            "currency" => "required",
        ]);

        $payment->create($validate);

        return redirect()->route("Reservation.update", $reservation);
    }
}
