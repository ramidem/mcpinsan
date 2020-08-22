<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    public function getImage($value)
    {
        return asset($value);
    }
}
