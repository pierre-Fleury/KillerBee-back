<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use DateTime;
use Firebase\JWT\JWT;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Users;

class UsersController extends Controller
{
  public function __construct()
  {
    //  $this->middleware('auth:api');
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */



  public function login(Request $request)
  {
    $email = $request->input('email');
    $password = $request->input('password');
    try {

      $login = Users::where('email', $email)
      ->where('password', $password)->firstOrFail();
    
    } catch (\Exception $e) {
    
      return response()->json("identifiant ou mot de passe incorrect");
    }

    if($login){
      $issuedAt   = new DateTime();
      $expire     = $issuedAt->modify('+60 minutes')->getTimestamp();
      $serverName = "KillerBee.com";
      $parameters = [
        'exp'  => $expire,                           // Expire
        'userName' => $request->input('email'),      // User name
      ];
      $secretKey = env('APP_SECRET_KEY');
      $token = JWT::encode(
        $parameters,
        $secretKey,
        'HS512'
      );
      // $token = Str::random(60);
      $data = array(
        "api_token" => $token,
    );
      $login->update($data);
      return response()->json($login);;
    }
    
  }


}
