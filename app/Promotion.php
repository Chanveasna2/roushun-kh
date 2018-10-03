<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    //
    protected $fillable=[

        'promo_name',
        'desc'

    ];


    public function user(){
        return $this->belongsTo('app\User','user_id');
    }
}

