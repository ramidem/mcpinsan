<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        return view('assets.create')
            ->with('categories', Category::all()->sortBy('name'));
    }

    /**
     * Store a newly created asset in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'category_id' => 'required',
        ]);

        $asset = new Asset($validatedData);

        $asset->save();

        return redirect( route('assets.show', $asset->id))
            ->with('message', 'Asset is added successfully.');
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
        return view('assets.edit')
            ->with('asset',$asset)
            ->with('categories', Category::all());
    }

    /**
     * Update the specified asset in storage.
     */
    public function update(Request $request, Asset $asset)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'image'
        ]);

        // update asset
        $asset->update($validatedData);

        // check if there's an image uploaded
        // if there's an image, save it and get the url
        if ($request->hasFile('image')) {
            // store the image
            $path = $request->file('image')->store('public/image');
            // this will return the url of the saved image
            $url = Storage::url($path);
            // set the new url of image
            $asset->image = $url;
        }

        // save asset
        $asset->save();

        return redirect( route('assets.show', $asset->id))
            ->with('message', 'asset is updated successfully.');
    }

    /**
     * Remove the specified asset from storage.
     */
    public function destroy(Asset $asset)
    {
        $asset->delete();
        return redirect( route('assets.index'))
            ->with('message', 'asset is deleted successfully.');
    }
}
