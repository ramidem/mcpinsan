<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Item;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    /**
     * Display a listing of the assets in a basket.
     */
    public function index()
    {
        if (session()->has('basket')) {
            $assets = Asset::find(array_keys(session('basket')));
            return view('basket.index')
                ->with('assets', $assets);
        } else {
            return view('basket.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req, $id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->session()->put("basket.$id");

        return back()
            ->with('message', 'asset is added to basket successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        session()->forget("basket.$id");

        if (count(session()->get('basket')) === 0) {
            session()->forget('basket');
        }

        return back()
            ->with('message', 'asset is removed from basket successfully.');
    }

    public function clear()
    {
        session()->forget('basket');

        return back()
            ->with('message', 'basket is now empty');
    }
}
