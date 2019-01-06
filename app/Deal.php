<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    public function status()
    {
        return $this->belongsTo('App\Status');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
