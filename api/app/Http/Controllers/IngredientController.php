<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class IngredientController extends Controller
{
  public function showAll()
  {
    $response = Http::get('http://webingredient:80/Ingredient');
    return  $response->getBody();
  }

  public function showOne($id)
  {
    $url = "http://webingredient:80/Ingredient/".$id;
    $response = Http::get($url);
    return  $response->getBody();
  }

  public function create(Request $request)
  {
    $url = "http://webingredient:80/Ingredient/create";
    $response = Http::post($url, $request->all());
    return $response->getBody();
  }

  public function update($id, Request $request)
  {
    $url = "http://webingredient:80/Ingredient/update/".$id;
    $response = Http::put($url, $request->all());
    return $response->getBody();
  }
  
  public function delete($id)
  {
    $url = "http://webingredient:80/Ingredient/delete/".$id;
    $response = Http::delete($url);
    return  $response->getBody();
  }
  
}
