<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class EtapesController extends Controller
{
  public function showAll()
  {
    $response = Http::get('http://localhost:8004/Etapes');
    return  $response->getBody();
  }

  public function showOne($id)
  {
    $url = "http://localhost:8004/Etapes/".$id;
    $response = Http::get($url);
    return  $response->getBody();
  }

  public function create(Request $request)
  {
    $url = "http://localhost:8004/Etapes/create";
    $response = Http::post($url, $request->all());
    return $response->getBody();
  }

  public function update($id, Request $request)
  {
    $url = "http://localhost:8004/Etapes/update/".$id;
    $response = Http::put($url, $request->all());
    return $response->getBody();
  }
  
  public function delete($id)
  {
    $url = "http://localhost:8004/Etapes/delete/".$id;
    $response = Http::delete($url);
    return  $response->getBody();
  }
  
}
