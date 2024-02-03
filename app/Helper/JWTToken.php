<?php

namespace App\Helper;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;


class  JWTToken
{

    static function createToken($email,$id): string
    {
        $key = env('JWT_KEY');
        $payload = [
            'iss' => 'lara-vel-token',
            'iat' => time(),
            'exp' => time() + 30 * 24 * 3600,
            'userEmail' => $email,
            'userId'=>$id



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
