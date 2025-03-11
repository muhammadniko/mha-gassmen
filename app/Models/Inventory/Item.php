<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // public $timestamps 		= false;
    // protected $table 		= 'T_Lokasi';
    // protected $primaryKey 	= 'kode_lokasi';
    // protected $guarded 		= [];

    // public function score()
    // {
    //     return $this->hasMany(Score::class, 'kode_lokasi');
    // }

    protected $fillable = [
        'no_asset',
        'item_name',
        'item_desc',
        'model',
        'manufacturer',
        'serial_number',
        'status',
        'condition',
        'assign_to',
        'image',
        'category_id'
    ];
}