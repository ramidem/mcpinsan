<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    public function itemStatus()
    {
        return $this->belongsTo('App\ItemStatus');
    }
}
