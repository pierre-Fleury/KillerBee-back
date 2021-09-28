<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class EtapesModel extends Model
{    
   protected $table = 'etape';
   protected $fillable = [
        'etap_label', 
        'etap_description'
   ];
   //protected $hidden = [];
}