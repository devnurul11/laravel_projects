<?php

use Firebase\JWT\JWT;

class JWTTocken{
    public static function createJWTTocken($userID):string{
        $key = env('JWT_KEY');

        $payload =[
            'iss'=> "lumen-jwt",    //issuer of the tocken
            //'sub'=> $user->id,      // subject of the tocken
            'iat'=> time(),         //time when jwt was issue
            'exp'=> time() + 60*60,  // time when jwt will expiar
            'user'=> $userID
        ];

        return JWT::encode($payload, $key, 'HS256');
    }
    public static function DecodeTocken('$tocken'):string{
        $key =  env('JWT_KEY');
        $deCoded = JWT::decode($tocken, new Key($key, 'HS256');
    }

}
