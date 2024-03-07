<?php

namespace App\Http\Controllers\Organizer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::where('user_id', auth()->user()->id)->get();
        $categories = Category::all();
        return view('organizer.event.index', compact('events', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('organizer.event.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:5', 'max:255'],
            'organization' => ['required', 'string', 'min:4', 'max:255'],
            'description' => ['required', 'string', 'min:15'],
            'starting_at' => ['required'],
            'validation_type' => ['required', 'in:automatic,manual'],
            'address' => ['required', 'string', 'min:5', 'max:255'],
            'places' => ['required', 'integer', 'min:5'],
            'category_id' => ['required', 'integer'],
        ]);

        $user_id = Auth::user()->id;

        Event::create([
            'title' => $request->title,
            'organization' => $request->organization,
            'description' => $request->description,
            'starting_at' => $request->starting_at,
            'validation_type' => $request->validation_type,
            'address' => $request->address,
            'places' => $request->places,
            'category_id' => $request->category_id,
            'user_id' => $user_id
        ]);

        return redirect()->route('event.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Event::find($id)->first();
        $categories = Category::all();
        return view('organizer.event.edit', compact('event', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:5', 'max:255'],
            'organization' => ['required', 'string', 'min:4', 'max:255'],
            'description' => ['required', 'string', 'min:15'],
            'starting_at' => ['required'],
            'validation_type' => ['required', 'in:automatic,manual'],
            'address' => ['required', 'string', 'min:5', 'max:255'],
            'places' => ['required', 'integer', 'min:5'],
            'category_id' => ['required', 'integer'],
        ]);

        $event = Event::find($id)->first();

        $event->update([
            'title' => $request->title,
            'organization' => $request->organization,
            'description' => $request->description,
            'starting_at' => $request->starting_at,
            'validation_type' => $request->validation_type,
            'address' => $request->address,
            'places' => $request->places,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Event::find($id)->delete();
        return redirect()->route('event.index');
    }
}
