<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

    public function updates()
    {
        return $this->hasMany('App\Udate_ticket');
    }


}
