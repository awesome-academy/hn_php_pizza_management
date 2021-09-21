<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'fullname',
        'email',
        'password',
        'phone',
        'role_id',
        'status',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function isAdmin()
    {
        return $this->role_id == config('common.role.admin');
    }
}
