<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Asset extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'category_id'
    ];

    use SoftDeletes;

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function isAvailable($asset_id)
    {
        return DB::table('items')
            ->where('asset_id', '=', $asset_id)
            ->where('item_status_id', '=', '1')
            ->get()
            ->count();
    }

    public function borrowed()
    {
        // look up asset_transaction table and look for this user
        // check the transaction with the transaction_id and check if the
        // status is not yet cleared/returned
    }
}
