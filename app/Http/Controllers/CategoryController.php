<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController
{
    /**
     * Update the name of the specified category.
     */
    public function updateName(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
        ]);

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
}
