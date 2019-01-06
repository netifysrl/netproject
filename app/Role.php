<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function teams()
    {
        return $this->belongsToMany('App\Team');
    }
}
