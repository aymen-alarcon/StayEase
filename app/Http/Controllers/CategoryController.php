<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('Categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create($validate);

        return redirect()->route('categories.index')->with('success', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('Categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('Categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update($validate);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
}
