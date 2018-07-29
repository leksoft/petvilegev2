<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $fillable = ['user_id','address'];
    
    public function user() {
        return $this->belongsTo('App\User');
    }
}
