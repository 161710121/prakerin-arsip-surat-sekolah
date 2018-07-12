<?php

namespace App;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    public function User()
    {
        return $this->belongsToMany('App\User', 'role_user', 'user_id', 'role_id');
    }
}
