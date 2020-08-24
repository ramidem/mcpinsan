<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect(route('account.show', auth()->user()->username));
        } else {
            return redirect(route('login'));
        }
    }

    public function create()
    {
        $this->authorize('create', User::class);
    }

    public function store()
    {
        $this->authorize('create', User::class);
    }

    public function show()
    {
        return view('account.show')
            ->with('user', auth()->user());
    }

    public function edit()
    {
        return redirect( route('account.show', auth()->user()->username) );
    }

    public function update()
    {
        return redirect( route('account.show', auth()->user()->username) );
    }

    public function destroy()
    {
        $this->authorize('delete', User::class);
    }
}
