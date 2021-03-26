<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
class users extends Model
{
    //
    protected $table = 'users';

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function checkPemissionAccess($check)
    {

        $roles = auth()->user()->role;
            $permissions = $roles->permissions;
            if ($permissions->contains('slug', $check)) {
                return true;
            }
            return false;
    }
}
