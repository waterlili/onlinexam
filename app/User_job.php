<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_job extends Model
{
    //
    public function job()
    {
      return $this->hasOne(Job::class);

    }
}
