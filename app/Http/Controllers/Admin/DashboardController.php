<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use App\Models\Reservation;
use App\Models\User;

class DashboardController  extends Controller
{
    public function index () {
        $users = User::all()->count();
        $app_events = Event::where('status', 'approved')->count();
        $rej_events = Event::where('status', 'rejected')->count();
        $categories = Category::all()->count();
        $reservations = Reservation::all()->count();
        return view('admin.index', compact('users', 'categories', 'app_events', 'rej_events', 'reservations'));
    }
}
