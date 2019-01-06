<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Project;
use App\Deal;
class Status extends Model
{
    //
    public function projects()
    {
        return $this->belongsTo(Project::class);
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
        return $this->hasOne(Deal::class, 'status_id', 'id');
    }

    public function updates()
    {
        return $this->hasMany('App\Update_ticket');
    }
}
