<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
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

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }

    public function milestones()
    {
        return $this->hasMany('App\Milestone');
    }

    public function deals()
    {
        return $this->hasMany('App\Deal');
    }

    public function updates()
    {
        return $this->hasMany('App\Update_ticket');
    }
}
