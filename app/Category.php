<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function deals()
    {
        return $this->hasMany('App\Deal');
    }

    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
