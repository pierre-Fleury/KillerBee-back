<?php

namespace App;

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Users extends Model

{

   //


   protected $table = 'users';
   protected $fillable = ['email','username','password', 'api_token'];

   protected $hidden = [

   'password'

   ];

}