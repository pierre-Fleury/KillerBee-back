<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class EtapesController extends Controller
{
  public function showAll()
  {
    $response = Http::get('http://webprocede:80/Etapes');
    return  $response->getBody();
  }

  public function showOne($id)
  {
    $url = "http://webprocede:80/Etapes/".$id;
    $response = Http::get($url);
    return  $response->getBody();
  }

  public function create(Request $request)
  {
    $url = "http://webprocede:80/Etapes/create";
    $response = Http::post($url, $request->all());
    return $response->getBody();
  }

  public function update($id, Request $request)
  {
    $url = "http://webprocede:80/Etapes/update/".$id;
    $response = Http::put($url, $request->all());
    return $response->getBody();
  }
  
  public function delete($id)
  {
    $url = "http://webprocede:80/Etapes/delete/".$id;
    $response = Http::delete($url);
    return  $response->getBody();
  }
  
}
