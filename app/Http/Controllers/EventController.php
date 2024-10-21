<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use App\Rules\NoOverlappingEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $events = Event::with('category')->orderBy('start_date')->get();
        foreach ($events as $event) {
            $event->image = base64_encode($event->image);
        }
        return view('welcome', compact('events', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => ['required', 'date', 'after_or_equal:start_date', new NoOverlappingEvent($request->start_date, $request->end_date)],
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator, 'addEvent')->withInput();
        }

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = file_get_contents($request->file('image')->getRealPath());
            $data['image'] = $image;
        }

        Event::create($data);
        return redirect()->route('events.index')->with('success', 'Event created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        $event->image = base64_encode($event->image);
        return response()->json($event);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => ['required', 'date', 'after_or_equal:start_date', new NoOverlappingEvent($request->start_date, $request->end_date, $event->id)],
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator, 'editEvent')->withInput();
        }

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = file_get_contents($request->file('image')->getRealPath());
            $data['image'] = $image;
        }

        $event->update($data);
        return redirect()->route('events.index')->with('success', 'Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->route('home')->with('success', 'Event deleted successfully.');

    }

    public function showImage($id)
    {
        $event = Event::find($id);
        $imageData = base64_encode($event->image);
        return view('event.show', compact('event', 'imageData'));
    }
}
