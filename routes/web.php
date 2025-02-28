<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route item
Route::get('/asset', [App\Http\Controllers\Inventory\Item_Controller::class, 'index'])->name('item.index');
Route::get('/asset/new', [App\Http\Controllers\Inventory\Item_Controller::class, 'addItem'])->name('item.add');
Route::post('/asset/store', [App\Http\Controllers\Toko\Item_Controller::class, 'store'])->name('item.store');