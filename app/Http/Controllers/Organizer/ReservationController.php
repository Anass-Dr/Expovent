<?php

namespace App\Http\Controllers\Organizer;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;


class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('organizer.reservation.index', compact('reservations'));
    }

    public function update(Request $request) {
        $request->validate([
            'id' => ['required', 'integer'],
            'status' => ['required', 'string', 'in:approved,rejected,pending']
        ]);

        $reservation = Reservation::find($request->id);
        $reservation->update($request->only(['status']));

        return redirect()->route('reservation.index');
    }
}
