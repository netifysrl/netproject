<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    //

    public function projects()
    {
        return $this->hasMany('App\Project');
    }

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }

    public function milestones()
    {
        return $this->hasMany('App\Milestone');
    }
}
