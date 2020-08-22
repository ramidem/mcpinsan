<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Item;
use App\ItemStatus;
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
        return view('items.create')
            ->with('assets', Asset::all())
            ->with('statuses', ItemStatus::all());
    }

    /**
     * Store a newly created item in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|string|max:5',
            'asset_id' => 'required',
            'item_status_id' => 'required',
        ]);

        $item = new Item($validatedData);
        $item->code = "MCP-".strtoupper($validatedData['code']);
        $item->save();

        return redirect( route('items.index', $item->id))
            ->with('message', 'Item is added successfully.');
    }

    /**
     * Display the specified item.
     */
    public function show(Item $item)
    {
        return view('items.show')
            ->with('item', $item);
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
