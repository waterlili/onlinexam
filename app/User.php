<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','email_token','verified'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function user_info()
    {
        return $this->hasOne(User_info::class);

    }
    // Set the verified status to true and make the email token null
	public function verified()
	{
	    $this->verified = 1;
	    $this->email_token = null;
	    $this->save();
	}
    
}
