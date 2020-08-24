<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     */
    public function index()
    {
        return view('categories.index')
            ->with('categories', Category::all()->sortBy('name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Category::class);

        return view('categories.create');
    }

    /**
     * Store a newly created category in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create', Category::class);

        $validateData = $request->validate([
            'name' => 'required|unique:categories,name',
        ]);

        $category = new Category($validateData);
        $category->save();

        return redirect(route('categories.index'))
            ->with('message', "Added successfully!");
    }

    /**
     * Display the specified category.
     */
    public function show(Category $category)
    {
        return view('categories.show')
            ->with('category', $category);
    }

    /**
     * Show the form for editing the specified category.
     */
    public function edit(Category $category)
    {
        $this->authorize('update', Category::class);

        return view('categories.edit')->with('category', $category);
    }

    /**
     * Update the specified category in storage.
     */
    public function update(Request $request, Category $category)
    {
        $this->authorize('update', Category::class);

        $validateData = $request->validate([
            'name' => 'required|unique:categories,name'
        ]);
        $category->update($validateData);
        $category->save();

        return redirect(route('categories.show', $category->id))
            ->with('message', "Category was updated successfully");
    }

    /**
     * Remove the specified category from storage.
     */
    public function destroy(Category $category)
    {
        $this->authorize('delete', Category::class);

        $category->delete();
        return redirect(route('categories.index'))
            ->with('message', "Deleted {$category->name} successfully")
            ->with('alert', 'warning');
    }
}
