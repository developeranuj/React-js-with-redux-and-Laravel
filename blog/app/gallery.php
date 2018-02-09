<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{	

     
      
    public function likes()
    {
        return $this->hasMany('App\likes', 'image_id', 'id');
    }
	public function comments()
	{
	    return $this->hasMany('App\CreateComments', 'image_id', 'id');
	}
}
