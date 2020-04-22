<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{

    protected $guarded = [];

    public function gudang(){
        return $this->hasMany('App\Gudang');
    }
}
