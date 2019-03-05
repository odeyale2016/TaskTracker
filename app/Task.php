<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
     protected $fillable = [
        'title','body', 'status', 'progress','user_id','deadline','photo_id'
    ];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

     public function project(){
        return $this->belongsTo('App\Project');
    }

     public function user(){
        return $this->belongsTo('App\User');
    }
}
