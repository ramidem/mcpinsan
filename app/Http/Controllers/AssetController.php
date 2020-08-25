<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Category;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

/* use Illuminate\Support\Facades\Storage; */
/* use League\Flysystem\File; */

class AssetController extends Controller
{
    /**
     * Display a listing of the assets.
     */
    public function index()
    {
        return view('assets.index')
            ->with('assets', Asset::latest()->get()->sortBy('name'));
    }

    /**
     * Show the form for creating a new asset.
     */
    public function create()
    {
        $this->authorize('create', Asset::class);

        return view('assets.create')
            ->with('categories', Category::all()->sortBy('name'));
    }

    /**
     * Store a newly created asset in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create', Asset::class);

        $validatedData = $request->validate([
            'name' => 'required|string|unique:assets',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $asset = new Asset($validatedData);

        $path = $request->file('image');

        if ($path != "") {
            $path_name = time(). "." . $path->getClientOriginalExtension();
            $destination = 'image/';
            $path->move($destination, $path_name);
            $asset->image = $destination.$path_name;
        } else {
            $asset->image = 'https://via.placeholder.com/500';
        }

        $asset->save();

        Item::create([

            'code' => "MCP-".strtoupper(Str::random(5)),
            'item_status_id' => 1,
            'asset_id' => $asset->id
        ]);

        return redirect( route('assets.show', $asset->id))
            ->with('message', 'Added asset successfully');
    }

    /**
     * Display the specified asset.
     */
    public function show(Asset $asset)
    {
        return view('assets.show')
            ->with('asset', $asset);
    }

    /**
     * Show the form for editing the specified asset.
     */
    public function edit(Asset $asset)
    {
        $this->authorize('update', Asset::class);

        return view('assets.edit')
            ->with('asset',$asset)
            ->with('categories', Category::all());
    }

    /**
     * Update the specified asset in storage.
     */
    public function update(Request $request, Asset $asset)
    {
        $this->authorize('update', Asset::class);

        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $asset->update($validatedData);

        if (request()->hasFile('image')) {
            $path = $request->file('image');
            $path_name = time(). "." . $path->getClientOriginalExtension();
            $destination = 'image/';
            $path->move($destination, $path_name);
            $asset->image = $destination.$path_name;
        }

        $asset->save();

        return redirect( route('assets.show', $asset->id))
            ->with('message', 'asset is updated successfully.');
    }

    /**
     * Remove the specified asset from storage.
     */
    public function destroy(Asset $asset)
    {
        $this->authorize('delete', Asset::class);

        $asset->delete();
        return redirect( route('assets.index'))
            ->with('message', 'asset is deleted successfully.');
    }
}
