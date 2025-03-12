<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory\Item;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class Item_Controller extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function index()
    {
        $listOfAsset = Item::orderBy('no_asset', 'ASC')->get();
        $jumlahAsset = Item::count();
        //$viewFile = (Auth::check()) ? 'administrator.data-permukiman' : 'guest.data-permukiman';

        return view ('item.assets', compact(['listOfAsset','jumlahAsset']));
    }

    public function show($id)
    {
        $item = Item::find($id);
        return view ('item.show', ['item' => $item]);
    }
    
    public function addItem()
    {
        return view('item.add');
    }

    public function store(Request $request)
    {
         $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
         ]);

        $imageName = $request->no_asset.'.'.$request->image->extension();  

        $request->image->move(public_path('images'), $imageName);

        $item = Item::create([
            'no_asset'  => $request->no_asset,
            'item_name'   => $request->item_name,
            'item_desc' => $request->item_desc,
            'model' => $request->model,
            'manufacturer'  => $request->manufacturer,
            'serial_number' => $request->serial_number,
            'status' => $request->status,
            'condition' => $request->condition,
            'assign_to' => "GA",
            'image' => $imageName,
            'category_id' => $request->category_id
        ]);

        $qrCodePath = 'qrcodes/' . $item->no_asset . '.png';
        $fullPath = storage_path('app/public/' . $qrCodePath);

        // Cek apakah folder qrcodes sudah ada, jika belum buat folder tersebut
        if (!file_exists(dirname($fullPath))) {
            mkdir(dirname($fullPath), 0755, true);
        }

        QrCode::format('png')->size(200)->generate('No. Asset: '.$item->no_asset.' / Asset Name: '.$item->item_name.' / Manufacturer: '.$item->manufacturer.' / Model: '.$item->model.' / Serial Number: '.$item->serial_number.' / Description: '.$item->item_desc, $fullPath);


        return back();
    }

    public function print()
    {
        $listOfAsset = Item::orderBy('no_asset', 'ASC')->get();

        return view ('layouts.print', compact(['listOfAsset']));
    }
}