<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ModeleController extends Controller
{
  public function showAll()
  {
    $response = Http::get('http://webmodele:80/Modele/');
    return  $response->getBody();
  }

  public function showOne($id)
  {
    $url = "http://webmodele:80/Modele/".$id;
    $response = Http::get($url);
    return  $response->getBody();
  }

  public function create(Request $request)
  {
    $url = "http://webmodele:80/Modele/create";
    $response = Http::post($url, $request->all());
    return $response->getBody();
  }

  public function update($id, Request $request)
  {
    $url = "http://webmodele:80/Modele/update/".$id;
    $response = Http::put($url, $request->all());
    return $response->getBody();
  }
  
  public function delete($id)
  {
    $url = "http://webmodele:80/Modele/delete/".$id;
    $response = Http::delete($url);
    return  $response->getBody();
  }
  
}
