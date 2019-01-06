<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;
use App\Status;
class Deal extends Model
{
    public function status()
    {
        return $this->belongsTo(Status::class,'status_id', 'id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
