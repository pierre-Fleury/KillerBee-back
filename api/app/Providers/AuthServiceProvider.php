<?php

namespace App\Providers;

use App\Models\Users;
use DateTime;
use Firebase\JWT\JWT;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot()
    {
        // Here you may define how you wish users to be authenticated for your Lumen
        // application. The callback which receives the incoming request instance
        // should return either a User instance or null. You're free to obtain
        // the User instance via an API token or any other method necessary.


        /*$this->app['auth']->viaRequest('api', function ($request) {
            $header = $request->header('api_token');
            
            if ($header && $header == "root") {
                return "new Users()";
            }
        });*/



        
        $this->app['auth']->viaRequest('api', function ($request) {
            if ($request->input('api_token')) {
                $user = Users::where('api_token', $request->input('api_token'))->first();
                if($user) {
                    $t = $request->input('api_token');
                    try {
                        $decoded = JWT::decode($t, env('APP_SECRET_KEY'), ['HS512']);
                    } catch (\Firebase\JWT\ExpiredException $err) {
                       if($err->getMessage() == "Expired token" ) {
                            return false;
                       } 
                    }
                    return $user;
                }    
            }
        });
    }
}
