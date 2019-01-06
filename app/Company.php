<?php

namespace App;
use App\Contact;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    public function contacts()
    {
        return $this->hasMany(Contact::class, 'id');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function projects()
    {
        return $this->belongsToMany('App\Project');
    }

    public function tickets()
    {
        return $this->hasMany('App\Ticket', 'foreign_key', 'local_key');
    }

    public function deals()
    {
        return $this->hasMany('App\Deal');
    }
}
