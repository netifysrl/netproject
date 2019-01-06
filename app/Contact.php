<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;

class Contact extends Model
{
    //
   public function companies_coom() {

       return $this->belongsTo(Company::class, 'comm_contact_id', 'id');
   }
}
