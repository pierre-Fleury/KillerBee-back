<?php

namespace App\Http\Middleware;

use App\Models\LogsModel;
use Illuminate\Http\Request;
use Closure;

class ExampleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $headers = [
            'Access-Control-Allow-Origin'      => '*',
            'Access-Control-Allow-Methods'     => 'POST, GET, OPTIONS, PUT, DELETE',
            'Access-Control-Allow-Credentials' => 'true',
            'Access-Control-Max-Age'           => '86400',
            'Access-Control-Allow-Headers'     => 'Content-Type, Authorization, X-Requested-With, api_token',
         ];
        
        if ($request->isMethod('OPTIONS')) {
            return response()->json('{"method":"OPTIONS"}', 200, $headers);
        }
        
        $response = $next($request);
        
        foreach ($headers as $key => $value) {
            $response->header($key, $value);
        }
        
        
        $req = $request->input();
        $url = $request->url();
        $pieces = explode("/", $url);
        $test =  implode(",", $req);

        if (!isset($pieces[4])) {
            $pieces[4] = "";
        }

        if ($pieces[4] == "auth") {
            $data = array(
                "logs_nom" => "connexion",
                "type_requete" => $pieces[4],
                "requete" => $test
            );
            $input = $request->input();
            LogsModel::create($data);
            return $next($response);
        } elseif ($pieces[4] == "create") {
            $data = array(
                "logs_nom" => $pieces[3],
                "type_requete" => "create",
                "requete" => $test
            );
            $input = $request->input();
            LogsModel::create($data);
            return $next($response);
        } elseif ($pieces[4] == "delete") {
            $data = array(
                "logs_nom" => $pieces[3],
                "type_requete" => "delete",
                "requete" => $test
            );
            $input = $request->input();
            LogsModel::create($data);
            return $next($response);
        } elseif ($pieces[4] == "update") {
            $data = array(
                "logs_nom" => $pieces[3],
                "type_requete" => "update",
                "requete" => $test
            );
            $input = $request->input();
            
            return $next($response);
            //LogsModel::create($data);
        }
        
        return $next($response);
    }
}
