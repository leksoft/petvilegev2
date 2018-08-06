<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','facebook_id','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function addNew($input)
    {
        $check = static::where('facebook_id',$input['facebook_id'])->first();


        if(is_null($check)){
            return static::create($input);
        }


        return $check;
    }
    //profiles 
    public function profile(){
        return $this->hasOne('App\Models\Profile','user_id');
    }

    //stores
    public function store(){
        return $this->hasOne('App\Models\Store','user_id');
    }

     //deal
     public function deal(){
        return $this->hasOne('App\Models\Deal','user_id');
    }

}
