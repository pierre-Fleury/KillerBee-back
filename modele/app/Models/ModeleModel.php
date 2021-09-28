<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class ModeleModel extends Model
{    
   protected $table = 'modele';
   protected $fillable = [
        'Nom', 
        'Description', 
        'pUHT', 
        'Gamme'
   ];
   //protected $hidden = [];
}