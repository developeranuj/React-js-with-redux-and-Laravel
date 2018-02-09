<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreateUser extends Model
{
      protected $table = "newusers";
      protected $fillable = ['username', 'email', 'password','user_image'];
}
