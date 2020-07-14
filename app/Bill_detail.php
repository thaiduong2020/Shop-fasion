<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill_detail extends Model
{
    protected $table = 'bill_detail';

    public function product(){ 
        return $this->belongTo('App\Product','id_products','id');

        
    }
    public function bills(){ 
        return $this->belongTo('App\Bill','id_bill','id');
    }
}
