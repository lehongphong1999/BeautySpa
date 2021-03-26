<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\permissions;
class role extends Model
{
    //
    protected $table = 'roles';

    protected $fillable = ['name'];

    public function users(){
        return $this->hasMany(User::class);
    }
    public function permissions()
    {
        return $this->belongsToMany(permissions::class,'role_permission','role_id','permission_id');
    }
}
