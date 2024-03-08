<?php

namespace App\Http\Controllers\Organizer;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Reservation;

class DashboardController extends Controller
{
    public function index() {
        $user_id = auth()->user()->id;
        # get organizer events
        $events = Event::where('user_id', $user_id)->count();
        # get organizer reservations
        $reservations = Reservation::where('user_id', $user_id);
        # get organizer approved reservations
        $app_reservations = $reservations->where('status', 'approved')->count();
        # get organizer rejected reservations
        $rej_reservations = $reservations->where('status', 'rejected')->count();
        # get organizer pending reservations
        $pend_reservations = $reservations->where('status', 'pending')->count();

        return view('organizer.index', compact('events', 'app_reservations', 'rej_reservations', 'pend_reservations'));
    }
}
