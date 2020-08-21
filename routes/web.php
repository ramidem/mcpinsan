<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/workspaces', function () {
    return view('workspaces');
})->name('workspaces');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/account', function () {
    return view('account.profile');
});

Route::get('/home', function() {
    return redirect('/account');
});

// @TODO
// Default to inventory/assets
Route::get('/inventory', function () {
    return view('inventory.index');
});

Route::resource('inventory/items', 'ItemController');
Route::resource('inventory/categories', 'CategoryController');
