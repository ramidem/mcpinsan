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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit(Asset $asset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asset $asset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asset $asset)
    {
        //
    }
}
