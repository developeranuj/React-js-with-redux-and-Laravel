<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreateComments extends Model
{
      protected $table = "comments";
      protected $fillable = ['userid', 'comments', 'image_id'];
}
