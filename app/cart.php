<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    public $timestamps = false; 
    
    
    public function product()
    {
        return $this->hasOne('App\products', 'id', 'id_product');
    }
}
