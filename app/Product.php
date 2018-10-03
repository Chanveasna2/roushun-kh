<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=[

        'pro_name',
        'pro_code',
        'desc',
        'prices',
        'category_id',
        'isPop',
        'photo_id'

    ];

    //manyToMany
    public function settingTypes(){

    }

    //manyToMany
    public function settingItems(){

    }

    public function category(){

        return $this->belongsTo('App\Category','category_id');
    }

    public function photo(){

        return $this->belongsTo('App\Photo','photo_id');
    }
}
