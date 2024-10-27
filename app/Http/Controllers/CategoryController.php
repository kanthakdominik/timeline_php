<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $categoryCount = Category::count();
        if ($categoryCount > 10) {
            return redirect()->back()->withErrors(['category' => 'Osiągnięto maksymalną liczbę kategorii (10).'])->withInput();
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:categories,name',
            'color' => 'nullable|string|max:7',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors(['category' => 'Kategoria o takiej nazwie już istnieje.']);
        }

        $data = $request->all();
        Category::create($data);
        
        return redirect()->back()->with('success', 'Kategoria stworzona pomyślnie.');
    }

    public function updateName(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255|unique:categories,name',
        ], [
            'category_id.required' => 'Pole kategoria jest wymagane.',
            'category_id.exists' => 'Wybrana kategoria jest nieprawidłowa.',
            'name.required' => 'Pole nazwa jest wymagane.',
            'name.string' => 'Pole nazwa musi być ciągiem znaków.',
            'name.max' => 'Nazwa nie może być dłuższa niż 255 znaków.',
            'name.unique' => 'Kategoria o takiej nazwie już istnieje.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $category = Category::findOrFail($request->category_id);
        $category->name = $request->name;
        $category->save();

        return redirect()->back()->with('success', 'Nazwa kategorii ustawiona pomyślnie.');
    }

    public function updateColor(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'color' => 'nullable|string|max:7',
        ]);

        $category = Category::findOrFail($request->category_id);
        $category->color = $request->color;
        $category->save();

        return redirect()->back()->with('success', 'Kolor kategorii ustawiony pomyślnie.');
    }

    public function destroy(Category $category)
    {
        // Check if any events are associated with this category
        $eventsCount = Event::where('category_id', $category->id)->count();

        if ($eventsCount > 0) {
            return redirect()->back()->withErrors(['category' => 'Nie można usunąć kategorii z powiązanymi wydarzeniami.']);
        }

        $category->delete();
        return redirect()->back()->with('success', 'Kategoria usunięta pomyślnie.');
    }
}
