<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    public function timeline()
    {
        return $this->belongsTo('App\Timeline');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function workers()
    {
        return $this->hasMany('App\TaskWorker');
    }
}
