<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_orders extends Model
{
    public $timestamps = false; 
    
    public function product()
    {
        return $this->hasOne('App\products', 'id', 'id_product');
    }
}
