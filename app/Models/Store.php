<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'stores';
    //protected $fillable = [];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
