<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class LogsModel extends Model
{    
   protected $table = 'logs';
   protected $fillable = [
        'logs_nom', 
        'type_requete', 
        'requete'
   ];
   //protected $hidden = [];
}