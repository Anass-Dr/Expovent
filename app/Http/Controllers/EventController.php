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
        $events = Event::where('status', 'approved')->whereNotIn('user_id', [auth()->user()->id])->simplePaginate(3);
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

        $events = $events->paginate(3)->appends(['query' => $title, 'category' => $category]);
        $categories = Category::all();

        return view('event.index', compact('events', 'categories'));
    }

    public function show (Event $event) {
        $available_seats = (int)$event->places - Reservation::where('status', 'approved')->count();
        $is_open =  Carbon::parse($event->starting_at)->diffInSeconds(now()) > 0;
        return view('event.show', compact('event', 'available_seats', 'is_open'));
    }

    public function reserve(Event $event) {
        # Check User :
        $user = Reservation::find(auth()->user()->id);

        if ($user) return redirect()->back();

        # Add Reservation :
        Reservation::create([
            'user_id' => auth()->user()->id,
            'event_id' => $event->id,
            'status' => $event->validation_type === 'automatic' ? 'approved' : 'pending'
        ]);

        return redirect()->route('event__user.index');
    }
}
