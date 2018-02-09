<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BLogs extends Model
{     
	  protected $fillable =['title','content','featured_image','trash']; 
      protected $table = "blogs";
}
