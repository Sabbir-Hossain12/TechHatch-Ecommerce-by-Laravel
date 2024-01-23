<?php

namespace App\Helper;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;


class  JWTToken
{

    static function createToken($email): string
    {
        $key = env('JWT_KEY');
        $payload = [
            'iss' => 'lara-vel-token',
            'iat' => time(),
            'exp' => time() + 60 * 60,
            'userEmail' => $email,


        ];

        return JWT::encode($payload, $key, 'HS256');
    }

    static function decodeToken($token)
    {
        try {

            if ($token == null) {
                return "Unauthorized";
            } else {

                $key = env('JWT_KEY');

                return JWT::decode($token, new Key($key, 'HS256'));
            }



        } catch (Exception $exception) {
            return "Unauthorized";
        }
    }

}
