<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * INDEX
     */
    public function index()
    {
        return view('categories.index')
            ->with('categories', Category::all()->sortBy('name'));
    }

    /**
     * CREATE
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * STORE
     */
    public function store(Request $request, Category $category)
    {

        $category = new Category(
            $request->validate([
                'name' =>'required|unique:categories,name'
            ])
        );

        $category->save();

        return redirect(route('categories.show', $category->id))
            ->with('message', 'Added category successfully');
    }

    /**
     * SHOW
     */
    public function show(Category $category)
    {
        return view('categories.show')->with('category', $category);
    }

    /**
     * EDIT
     */
    public function edit(Category $category)
    {
        return view('categories.edit')->with('category', $category);
    }

    /**
     * UPDATE
     */
    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' =>'required|unique:categories,name'
        ]);

        $category->update($validatedData);
        $category->save();

        return redirect(route('categories.show', $category->id))
            ->with('message', 'Added category successfully');
    }

    /**
     * DESTROY
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect(route('categories.index'))
            ->with('message',"Category {$category->name} has been deleted")
            ->with('alert','warning');
    }
}
