<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class ModeleModel extends Model
{    
   protected $table = 'freezbe';
   protected $fillable = [
        'Nom', 
        'Description', 
        'pUHT', 
        'Gamme'
   ];
   //protected $hidden = [];
}