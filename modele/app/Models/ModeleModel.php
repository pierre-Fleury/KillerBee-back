<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class ModeleModel extends Model
{    
   protected $table = 'modele';
   protected $fillable = [
        'module_nom', 
        'module_description', 
        'module_pUHT', 
        'module_gamme'
   ];
   //protected $hidden = [];
}