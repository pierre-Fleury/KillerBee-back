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
        $req = $request->input();
        $url = $request->url();
        $pieces = explode("/", $url);
        $test =  implode(",", $req );
        if(!isset($pieces[4])){
            $pieces[4] = "";
        }
        //$comma_separated = implode(",", $req);
        $data = array(
            "logs_nom" => $pieces[3],
            "type_requete" => $pieces[4], 
            "requete" => $test
          );
        $input = $request->input(); 
        LogsModel::create($data);
        return $next($request);
    }
}
