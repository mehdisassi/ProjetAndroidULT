<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = ['id','firstname','lastname','phonenumber','email',];

     protected $table = 'contact';
     public $timestamps = false;
}
