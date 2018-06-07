<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
   protected $fillable = 
   [
   	'email', 'name', 'password'
   ];
   protected $table ="users";
}



