<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
  public function showAll()
  {
    $response = Http::get('http://localhost:8000/Modele');
    return  $response->getBody();
  }
}