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
       'name', 'email', 'password','role','phone_no','username','address','gender','photo_id','remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     public function role(){
        return $this->belongsTo('App\Role');
    }

   public function photo(){
        return $this->belongsTo('App\Photo');
    }
     public function tasks(){
        return $this->hasMany('App\Task');
    }
}
