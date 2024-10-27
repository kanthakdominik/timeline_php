<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use App\Rules\NoOverlappingEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $categories = Category::all();
        $events = Event::with('category')->orderBy('start_date')->get();
        foreach ($events as $event) {
            $event->image = base64_encode($event->image);
        }
        return view('welcome', compact('events', 'categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => ['required', 'date', 'after_or_equal:start_date', new NoOverlappingEvent($request->start_date, $request->end_date)],
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ], [
            'name.required' => 'Pole nazwa jest wymagane.',
            'name.string' => 'Pole nazwa musi być ciągiem znaków.',
            'name.max' => 'Nazwa nie może być dłuższa niż 255 znaków.',
            'description.nullable' => 'Pole opis jest opcjonalne.',
            'description.string' => 'Pole opis musi być ciągiem znaków.',
            'start_date.required' => 'Pole data rozpoczęcia jest wymagane.',
            'start_date.date' => 'Pole data rozpoczęcia musi być prawidłową datą.',
            'end_date.required' => 'Pole data zakończenia jest wymagane.',
            'end_date.date' => 'Pole data zakończenia musi być prawidłową datą.',
            'end_date.after_or_equal' => 'Data zakończenia musi być datą późniejszą lub równą dacie rozpoczęcia.',
            'image.image' => 'Plik musi być obrazem.',
            'image.mimes' => 'Plik musi być typu: jpeg, png, jpg, gif, svg.',
            'image.max' => 'Plik nie może być większy niż 2048 kilobajtów.',
            'category_id.required' => 'Pole kategoria jest wymagane.',
            'category_id.exists' => 'Wybrana kategoria jest nieprawidłowa.',
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
        return redirect()->route('events.index')->with('success', 'Wydarzenie dodane pomyślnie');
    }

    public function show(Event $event)
    {
        $event->image = base64_encode($event->image);
        return response()->json($event);
    }

    public function update(Request $request, Event $event)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => ['required', 'date', 'after_or_equal:start_date', new NoOverlappingEvent($request->start_date, $request->end_date, $event->id)],
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ], [
            'name.required' => 'Pole nazwa jest wymagane.',
            'name.string' => 'Pole nazwa musi być ciągiem znaków.',
            'name.max' => 'Nazwa nie może być dłuższa niż 255 znaków.',
            'description.nullable' => 'Pole opis jest opcjonalne.',
            'description.string' => 'Pole opis musi być ciągiem znaków.',
            'start_date.required' => 'Pole data rozpoczęcia jest wymagane.',
            'start_date.date' => 'Pole data rozpoczęcia musi być prawidłową datą.',
            'end_date.required' => 'Pole data zakończenia jest wymagane.',
            'end_date.date' => 'Pole data zakończenia musi być prawidłową datą.',
            'end_date.after_or_equal' => 'Data zakończenia musi być datą późniejszą lub równą dacie rozpoczęcia.',
            'image.image' => 'Plik musi być obrazem.',
            'image.mimes' => 'Plik musi być typu: jpeg, png, jpg, gif, svg.',
            'image.max' => 'Plik nie może być większy niż 2048 kilobajtów.',
            'category_id.required' => 'Pole kategoria jest wymagane.',
            'category_id.exists' => 'Wybrana kategoria jest nieprawidłowa.',
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
        return redirect()->route('events.index')->with('success', 'Wydarzenie edytowane pomyślnie');
    }

    public function destroy(string $id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->route('home')->with('success', 'Wydarzenie usunięte pomyślnie.');
    }

    public function showImage($id)
    {
        $event = Event::find($id);
        $imageData = base64_encode($event->image);
        return view('event.show', compact('event', 'imageData'));
    }
}
