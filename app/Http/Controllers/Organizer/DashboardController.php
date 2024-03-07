<?php

namespace App\Http\Controllers\Organizer;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Reservation;

class DashboardController extends Controller
{
    public function index() {
        $events = Event::where('user_id', auth()->user()->id)->count();
        $app_reservations = Reservation::where('status', 'approved')->count();
        $rej_reservations = Reservation::where('status', 'rejected')->count();
        $pend_reservations = Reservation::where('status', 'pending')->count();
        return view('organizer.index', compact('events', 'app_reservations', 'rej_reservations', 'pend_reservations'));
    }
}
