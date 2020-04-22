<?php

namespace App;
use App\Supplier;

use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    public function supplier(){
    	return $this->belongsTo(Supplier::class);
    }
    protected $table = 'gudang';
    protected $guarded = [];
}
