<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_info extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'gender','marriage','birth_date','phone','talents',
    ];
    public function user()
    {
    	return $this->belongsTo(User::class);

    }
    public function user_job()
    {
      return $this->hasOne(User_job::class);

    }
}
