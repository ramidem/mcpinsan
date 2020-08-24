<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    protected $fillable = [
        'code',
        'item_status_id',
        'asset_id'
    ];

    public function asset(){
    	return $this->belongsTo('App\Asset');
    }

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function itemStatus()
    {
        return $this->belongsTo('App\ItemStatus');
    }
}
