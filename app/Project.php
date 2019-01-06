<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function timeline()
    {
        return $this->belongsTo('App\Timeline');
    }

    public function companies()
    {
        return $this->belongsToMany('App\Company');
    }

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
