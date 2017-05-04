<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageHistory extends Model
{
    //
    protected $fillable = ['id','idMessage','idContact',];

     protected $table = 'messagehistory';
     public $timestamps = false;
}
