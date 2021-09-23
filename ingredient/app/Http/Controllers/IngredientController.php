<?php
namespace App\Http\Controllers;
use App\Models\IngredientModel;
use Illuminate\Http\Request;
class IngredientController extends Controller
{
  public function showAll()
  {
    return response()->json(IngredientModel::all());
  }
  public function showOne($id)
  {
    return response()->json(IngredientModel::find($id));
  }

  public function create(Request $request)
  {
      IngredientModel::create($request->all());
      return response()->json(IngredientModel::all());
  }

  public function update($id, Request $request)
  {
      $ingredient = IngredientModel::findOrFail($id);
      $ingredient->update($request->all());
      return response()->json($ingredient, 200);
  }
  
  public function delete($id)
  {
    IngredientModel::findOrFail($id)->delete();
    return response('Deleted Successfully ', 200);
  }
  
}