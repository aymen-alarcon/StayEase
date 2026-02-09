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
<<<<<<< .merge_file_8o3xAR
        //
=======
        $categories = Category::all();
        return view('Categories.index', compact('categories'));
>>>>>>> .merge_file_pMBgfW
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< .merge_file_8o3xAR
        //
=======
        return view('Categories.create');
>>>>>>> .merge_file_pMBgfW
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< .merge_file_8o3xAR
        //
=======
        $validate = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create($validate);

        return redirect()->route('categories.index')->with('success', 'Category created successfully');
>>>>>>> .merge_file_pMBgfW
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
<<<<<<< .merge_file_8o3xAR
        //
=======
        return view('Categories.show', compact('category'));
>>>>>>> .merge_file_pMBgfW
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
<<<<<<< .merge_file_8o3xAR
        //
=======
        return view('Categories.edit', compact('category'));
>>>>>>> .merge_file_pMBgfW
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
<<<<<<< .merge_file_8o3xAR
        //
=======
        $validate = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update($validate);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
>>>>>>> .merge_file_pMBgfW
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
<<<<<<< .merge_file_8o3xAR
        //
=======
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
>>>>>>> .merge_file_pMBgfW
    }
}
