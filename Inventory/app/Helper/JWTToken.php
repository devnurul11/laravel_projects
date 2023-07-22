<?php
namespace App\Helper;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTToken {
    public static function createJWTToken($userEmail): string {
        $key = env('JWT_KEY');

        $payload = [
            'iss' => "lumen-jwt",    // issuer of the token
            //'sub' => $user->id,      // subject of the token
            'iat' => time(),         // time when the JWT was issued
            'exp' => time() + 60 * 60 * 24,  // time when the JWT will expire
            'userEmail' => $userEmail
        ];

        return JWT::encode($payload, $key, 'HS256');
    }

    // otp very fiied token
    public static function createOtpJWTToken($userEmail): string {
        $key = env('JWT_KEY');

        $payload = [
            'iss' => "lumen-jwt",    // issuer of the token
            //'sub' => $user->id,      // subject of the token
            'iat' => time(),         // time when the JWT was issued
            'exp' => time() + 60,  // time when the JWT will expire
            'userEmail' => $userEmail
        ];

        return JWT::encode($payload, $key, 'HS256');
    }

    public static function DecodeToken($token) {
        try {
            $key = env('JWT_KEY');
            $decoded = JWT::decode($token, new Key($key, 'HS256'));

            return $decoded->userEmail;
        } 
        catch (\Exception $e) {
            return "Unauthorized";
        }
    }
}
