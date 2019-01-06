<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Status;
use App\Company;

class Project extends Model
{
    //

    public function statuses()
    {
        return $this->hasOne(Status::class, 'id', 'status_id');
    }


    public function timeline()
    {
        return $this->belongsTo('App\Timeline');
    }

    public function companies()
    {
        return $this->hasOne(Company::class, 'id', 'company_id');
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
