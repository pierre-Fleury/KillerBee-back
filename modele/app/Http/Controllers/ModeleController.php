<?php
namespace App\Http\Controllers;
use App\Models\ModeleModel;
use Illuminate\Http\Request;
class ModeleController extends Controller
{
  public function showAll()
  {
    return response()->json(ModeleModel::all());
  }
  public function showOne($id)
  {
    return response()->json(ModeleModel::find($id));
  }

  public function create(Request $request)
  {
      ModeleModel::create($request->all());
      return response()->json(ModeleModel::all());
  }

  public function update($id, Request $request)
  {
      $Modele = ModeleModel::findOrFail($id);
      $Modele->update($request->all());
      return response()->json($Modele, 200);
  }
  
  public function delete($id)
  {
    ModeleModel::findOrFail($id)->delete();
    return response('Deleted Successfully ', 200);
  }
  
}