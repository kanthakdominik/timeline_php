<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::orderBy('start_date')->get();
        foreach ($events as $event) {
            $event->image = base64_encode($event->image);
        }
        return view('welcome', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
        ]);

        $event = Event::create($validatedData);
        return response()->json($event, 201);
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     $event = Event::findOrFail($id);
    //     return response()->json($event);
    // }

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
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'start_date' => 'required|date',
        'end_date' => 'required|date',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $data = $request->all();

    if ($request->hasFile('image')) {
        // Read the image file and convert it to base64
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
        return response()->json(null, 204);
    }

    public function showImage($id)
    {
        $event = Event::find($id);
        $imageData = base64_encode($event->image); // Assuming 'image' is the BLOB field
        return view('event.show', compact('event', 'imageData'));
    }
}
