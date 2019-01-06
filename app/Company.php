<?php

namespace App;
use App\Contact;
use App\Project;
use App\Deal;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    public function comm_contacts()
    {
        return $this->hasMany(Contact::class, 'id', 'comm_contact_id');
    }
    public function amm_contacts()
    {
        return $this->hasMany(Contact::class, 'id', 'amm_contact_id');

    }
    public function projects()
    {
        return $this->belongsTo(Project::class, 'company_id', 'id');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }


    public function tickets()
    {
        return $this->hasMany('App\Ticket', 'foreign_key', 'local_key');
    }

    public function deals()
    {
        return $this->hasMany(Deal::class, 'company_id', 'id');
    }
}
