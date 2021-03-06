<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public  function roles(){
        return $this->belongsToMany('App\Role','user_role','user_id','role_id');
    }

    public function recharge(){
        return $this->hasMany('App\Recharge');
    }

    public function purchase(){
        return $this->hasMany('App\Purchase');
    }

    public function image(){
        return $this->hasOne('App\Image');
    }

    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($role)) {
                return true;
            }
        }
        return false;
    }

    public function hasRole($role){
        if($this->roles()->where('role',$role)->first()){
            return true;
        }
        return false;
    }
}
