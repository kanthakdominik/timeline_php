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

    /**
     * Store a newly created category in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:categories,name',
            'color' => 'nullable|string|max:7',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors(['category' => 'Kategoria o takiej nazwie już istnieje.']);
        }

        $data = $request->all();
        Category::create($data);
        
        return redirect()->back()->with('success', 'Category created successfully.');
    }

    /**
     * Update the name of the specified category.
     */
    public function updateName(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255|unique:categories,name,',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors(['category' => 'Kategoria o takiej nazwie już istnieje.']);
        }

        $category = Category::findOrFail($request->category_id);
        $category->name = $request->name;
        $category->save();

        return redirect()->back()->with('success', 'Category name updated successfully.');
    }

    /**
     * Update the color of the specified category.
     */
    public function updateColor(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'color' => 'required|string|max:7',
        ]);

        $category = Category::findOrFail($request->category_id);
        $category->color = $request->color;
        $category->save();

        return redirect()->back()->with('success', 'Category color updated successfully.');
    }

    /**
     * Remove the specified category from storage.
     */
    public function destroy(Category $category)
    {
        // Check if any events are associated with this category
        $eventsCount = Event::where('category_id', $category->id)->count();

        if ($eventsCount > 0) {
            return redirect()->back()->withErrors(['category' => 'Nie można usunąć kategorii z powiązanymi wydarzeniami.']);
        }

        $category->delete();
        return redirect()->back()->with('success', 'Category deleted successfully.');
    }
}
