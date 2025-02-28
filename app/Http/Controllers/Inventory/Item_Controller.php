<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class Item_Controller extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function index()
    {
        return view('item.dashboard');
    }
    
    public function addItem()
    {
        return view('item.add');
    }

    // public function show(Toko $toko)
    // {
    //     return view('toko.profiltoko', ['toko' => $toko]);
    // }
}