<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Permissions;
class permissions extends Model
{
    //
    public function roles()
    {
        return $this->belongsToMany(Role::class,'role_permission','permission_id','role_id');
    }
}
