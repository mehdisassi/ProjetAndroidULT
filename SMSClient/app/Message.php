<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
     protected $fillable = ['id','content','date',];

     protected $table = 'messages';
     public $timestamps = false;

}
