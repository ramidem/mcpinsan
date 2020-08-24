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

Route::get('/home', function() {
    return redirect(route('account.show', auth()->user()->username));
});

/* Route::get('/inventory', function () { */
/*     return redirect('inventory/assets'); */
/* }); */


/* Route::resources([ */
/*     'inventory/items' => 'ItemController', */
/*     'inventory/categories' => 'CategoryController', */
/*     'inventory/assets' => 'AssetController', */
/*     'basket' => 'BasketController', */
/*     'account' => 'AccountController', */
/*     'transactions' => 'TransactionController', */
/* ]); */

Route::middleware('auth')->group(function () {
    Route::resources([
        'inventory/items' => 'ItemController',
        'inventory/categories' => 'CategoryController',
        'inventory/assets' => 'AssetController',
        'basket' => 'BasketController',
        'account' => 'AccountController',
        'transactions' => 'TransactionController',
    ]);
    Route::delete('/basket', 'BasketController@clear')->name('basket.clear');

    Route::get('/inventory', function () {
        return redirect('inventory/assets');
    });
});
