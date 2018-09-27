<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SysStatic extends Model
{
    //
    protected $fillable= [
        'static_name',
        'static_value',
    ];
}
