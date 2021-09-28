<?php
namespace App\Http\Controllers;
use App\Models\EtapesModel;
use Illuminate\Http\Request;
class EtapesController extends Controller
{
  public function showAll()
  {
    return response()->json(EtapesModel::all());
  }
  public function showOne($id)
  {
    return response()->json(EtapesModel::find($id));
  }

  public function create(Request $request)
  {
      EtapesModel::create($request->all());
      return response()->json(EtapesModel::all());
  }

  public function update($id, Request $request)
  {
      $Etapes = EtapesModel::findOrFail($id);
      $Etapes->update($request->all());
      return response()->json($Etapes, 200);
  }
  
  public function delete($id)
  {
    EtapesModel::findOrFail($id)->delete();
    return response('Deleted Successfully ', 200);
  }
  
}