<?php
namespace App\Http\Controllers;
use App\Models\ProcedeModel;
use Illuminate\Http\Request;
class ProcedeController extends Controller
{
  public function showAll()
  {
    return response()->json(ProcedeModel::all());
  }
  public function showOne($id)
  {
    return response()->json(ProcedeModel::find($id));
  }

  public function create(Request $request)
  {
      ProcedeModel::create($request->all());
      return response()->json(ProcedeModel::all());
  }

  public function update($id, Request $request)
  {
      $Procede = ProcedeModel::findOrFail($id);
      $Procede->update($request->all());
      return response()->json($Procede, 200);
  }
  
  public function delete($id)
  {
    ProcedeModel::findOrFail($id)->delete();
    return response('Deleted Successfully ', 200);
  }
  
}