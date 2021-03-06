<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Category;
use App\Item;
use App\RequestStatus;
use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::all();
        $statuses = RequestStatus::all();

        return view('transactions.index')
            ->with('transactions', $transactions)
            ->with('statuses', $statuses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Transaction::class);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $transaction = new Transaction;
        $transaction->transaction_code = strtoupper(Str::random(10));
        $transaction->user_id = Auth::user()->id;
        $assets = Asset::find(array_keys(session('basket')));
        $transaction->save();

        foreach ($assets as $asset) {
                $transaction->assets()->attach($asset->id);
                $item = Item::where('item_status_id', '=', '1')
                    ->where('asset_id', '=', $asset->id)
                    ->first();
                $item->item_status_id = 3;
                $item->save();
        }

        $transaction->save();

        // clear cart
        session()->forget('basket');

        return redirect( route('transactions.show', $transaction->id))
            ->with('message', 'Successfully checked out');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction, User $user)
    {
        $this->authorize('view', $transaction);

        $statuses = RequestStatus::all();
        $categories = Category::all();
        return view('transactions.show')
            ->with('transaction',$transaction)
            ->with('statuses', $statuses)
            ->with('categories', $categories);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $this->authorize('update', Transaction::class);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        // if statement if user wants to cancel
        $this->authorize('update', Transaction::class);

        $transaction->request_status_id = $request->status_id;
        $transaction->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $this->authorize('delete', Transaction::class);
    }
}
