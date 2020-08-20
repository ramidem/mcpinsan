<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing items
     */
    public function index()
    {
        return view('items.index')
            ->with('items', Item::all());
    }

    /**
     * Show the form for creating a new item.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created item in storage.
     */
    public function store(Request $request)
    {
        // @TODO
        // code generator
        $validateData = $request->validate([
            'code' => 'required|unique:items,name',
        ]);

        $item = new Item($validateData);
        $item->save();

        return redirect(route('items.index'))
            ->with('message', "Added successfully!");
    }

    /**
     * Display the specified item.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified item.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified item in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified item from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
