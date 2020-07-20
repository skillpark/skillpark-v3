<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
        'avatar', 'provider_id', 'provider',
        'access_token', 'city_id', 'about'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

// ------------------------roles------------------------
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasAnyRoles($roles){
        return null != $this->roles()->whereIn('name', $roles)->first();
    }

    public function hasAnyRole($role)
    {
        return null != $this->roles()->where('name', $role)->first();
    }

// ------------------------end roles------------------------    

    public function getAvatarAttribute($val)
    {
        return is_null($val) ? asset('images/avatar-placeholder.svg') : $val;
    }

    public function cities()
    {
        return $this->belongsTo(City::class);
    }
}
