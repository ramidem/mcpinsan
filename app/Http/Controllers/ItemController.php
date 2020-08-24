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
        $this->authorize('create', Item::class);

        return view('items.create')
            ->with('assets', Asset::all())
            ->with('statuses', ItemStatus::all());
    }

    /**
     * Store a newly created item in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create', Item::class);

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
        $this->authorize('update', Item::class);

        return view('items.edit')
            ->with('item',$item)
            ->with('assets', Asset::all())
            ->with('statuses', ItemStatus::all());
    }

    /**
     * Update the specified item in storage.
     */
    public function update(Request $request, Item $item)
    {
        $this->authorize('update', Item::class);

        $validatedData = $request->validate([
            'code' => 'required|string|max:5',
            'asset_id' => 'required',
            'item_status_id' => 'required',
        ]);

        $item->update($validatedData);
        $item->code = "MCP-".strtoupper($validatedData['code']);
        $item->save();

        return redirect( route('items.show', $item->id))
            ->with('message', 'Item is updated successfully.');
    }

    /**
     * Remove the specified item from storage.
     */
    public function destroy(Item $item)
    {
        $this->authorize('delete', Item::class);

        $item->delete();
        return redirect( route('items.index'))
            ->with('message', 'item is deleted successfully.');
    }
}
