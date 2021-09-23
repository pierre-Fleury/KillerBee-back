<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class IngredientModel extends Model
{    
   protected $table = 'ingredient';
   protected $fillable = [
        'ing_nom', 
        'ing_description'
   ];
   //protected $hidden = [];
}