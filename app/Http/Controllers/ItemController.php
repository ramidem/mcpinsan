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
        $this->authorize('viewAny', Item::class);

        return view('items.index')
            ->with('items', Item::all());
    }

    /**
     * Show the form for creating a new item.
     */
    public function create()
    {
        // $this->authorize('create', Item::class);

        return view('items.create')
            ->with('assets', Asset::all())
            ->with('statuses', ItemStatus::all());
    }

    /**
     * Store a newly created item in storage.
     */
    public function store(Request $request, Item $item)
    {
        $this->authorize('create', Item::class);

        $item->code = "MCP-".strtoupper($request->code);

        $validatedData = $request->validate([
            'code' => 'required|string|max:9|unique:items',
            'asset_id' => 'required',
            'item_status_id' => 'required',
        ]);

        $item = new Item($validatedData);

        $item->save();

        return redirect( route('items.index', $item->id))
            ->with('message', 'Added item successfully.');
    }

    /**
     * Display the specified item.
     */
    public function show(Item $item)
    {
        $this->authorize('view', Item::class);

        return redirect( route('assets.show', $item->asset_id) );
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

        $item->code = "MCP-".strtoupper($request->code);

        $validatedData = $request->validate([
            'code' => 'required|string|max:5',
            'asset_id' => 'required',
            'item_status_id' => 'required',
        ]);

        $item->update($validatedData);
        $item->save();

        return redirect( route('items.show', $item->id))
            ->with('message', 'Updated item successfully.');
    }

    /**
     * Remove the specified item from storage.
     */
    public function destroy(Item $item)
    {
        $this->authorize('delete', Item::class);

        $item->delete();
        return redirect( route('items.index'))
            ->with('message', 'Deleted item successfully.');
    }
}
