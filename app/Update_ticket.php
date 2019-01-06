<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Update_ticket extends Model
{
    public function ticket()
    {
        return $this->belongsTo('App\Ticket');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
