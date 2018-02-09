<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class likes extends Model
{
      protected $table = "likes";
      protected $fillable = ['likes','image_id','userid'];

   
}

