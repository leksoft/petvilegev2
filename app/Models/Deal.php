<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $table = 'deals';
    //protected $fillable = [];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
