<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function movies()
    {
        return $this->hasMany('App\Models\Movie');
    }
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }


}
