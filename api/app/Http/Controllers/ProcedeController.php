<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ProcedeController extends Controller
{
  public function showAll()
  {
    $response = Http::get('http://webprocede:80/Procede');
    return  $response->getBody();
  }

  public function showOne($id)
  {
    $url = "http://webprocede:80/Procede/".$id;
    $response = Http::get($url);
    return  $response->getBody();
  }

  public function create(Request $request)
  {
    $url = "http://webprocede:80/Procede/create";
    $response = Http::post($url, $request->all());
    return $response->getBody();
  }

  public function update($id, Request $request)
  {
    $url = "http://webprocede:80/Procede/update/".$id;
    $response = Http::put($url, $request->all());
    return $response->getBody();
  }
  
  public function delete($id)
  {
    $url = "http://webprocede:80/Procede/delete/".$id;
    $response = Http::delete($url);
    return  $response->getBody();
  }
  
}
