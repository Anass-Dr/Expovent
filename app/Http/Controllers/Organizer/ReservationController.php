<?php

namespace App\Http\Controllers\Organizer;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReservationController extends Controller
{
    public function index()
    {
        $reservations = DB::table('reservations as r')
            ->leftJoin('events as e', 'r.event_id', '=', 'e.id')
            ->leftJoin('users as u', 'u.id', '=', 'e.user_id')
            ->leftJoin('users as ru', 'ru.id', '=', 'r.user_id')
            ->where('u.id', '=', auth()->user()->id)
            ->select('r.*', 'ru.full_name', 'e.title', 'e.validation_type')
            ->get();

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
