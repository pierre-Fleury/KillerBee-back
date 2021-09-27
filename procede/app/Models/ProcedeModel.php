<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class ProcedeModel extends Model
{    
   protected $table = 'procede';
   protected $fillable = [
        'pro_nom', 
        'pro_description',
        'id_procede'
   ];
   //protected $hidden = [];
}