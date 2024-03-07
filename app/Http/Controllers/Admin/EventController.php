<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.event.index', compact('events'));
    }

    public function validateEvent(Request $request)
    {
        $request->validate([
            'status' => ['required', 'in:approved,pending,rejected'],
            'event_id' => ['required', 'integer']
        ]);

        $event = Event::find($request->event_id);
        $event->update([
            'status' => $request->status
        ]);

        return redirect()->route('admin.event');
    }
}
