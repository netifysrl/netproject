<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    public function timeline()
    {
        return $this->belongsTo('App\Timeline');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }
}
