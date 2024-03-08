<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller{
    public function index () {
        $categories = Category::all();
        $user = auth()->user();
        $events = Event::where('status', 'approved');
        if ($user) {
            $events = $events->whereNotIn('user_id', [auth()->user()->id]);
        }
        $events = $events->simplePaginate(3);
        return view('event.index', compact('events', 'categories'));
    }

    public function search(Request $request)
    {
        $title = $request->input('title') ?? '';
        $category = $request->input('category');
        $events = Event::where('title', 'like', '%'.$title.'%');

        if ($category) {
            $events = $events->where('category_id', $category);
        }

        $events = $events->simplePaginate(3)->appends(['query' => $title, 'category' => $category]);
        $categories = Category::all();

        return view('event.index', compact('events', 'categories'));
    }

    public function show (Event $event) {
        # check if the event is created by this user :
        $user = auth()->user();
        if ($user && $event->user->id == $user->id) return redirect()->route('event__user.index');

        # check if the user already reserved
        $is_reserved = $user && Reservation::where('user_id', $user->id)->where('event_id', $event->id)->first();
        # check for available seats
        $available_seats = (int)$event->places - Reservation::where('status', 'approved')->count();
        # check for available time
        $is_open =  Carbon::parse($event->starting_at)->diffInSeconds(now()) > 0;

        return view('event.show', compact('event', 'is_reserved', 'available_seats', 'is_open'));
    }

    public function reserve(Event $event) {
        $user_id = auth()->user()->id;
        $event_id = $event->id;
        # Check User Reservation is exists :
        $user = Reservation::where('user_id', $user_id)->where('event_id', $event_id)->first();

        if ($user) return redirect()->back()->with('message', 'Already reserved');

        # Add Reservation :
        $status = $event->validation_type === 'automatic' ? 'approved' : 'pending';
        Reservation::create([
            'user_id' => $user_id,
            'event_id' => $event_id,
            'status' => $status
        ]);

        #
        $message = $status === 'approved' ? 'Reservation added successfully' : 'Reservation is waiting approved';
        return redirect()->route('event__user.index')->with('message', $message);
    }
}
