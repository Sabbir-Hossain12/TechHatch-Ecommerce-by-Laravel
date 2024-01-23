<?php

namespace App\Http\Controllers;


use App\Helper\JWTToken;
use App\Models\User;
use Exception;
use Firebase\JWT\JWT;
use http\Env\Response;
use Illuminate\Http\Request;

class userController extends Controller
{
//    Registration
    function registration(Request $request)
    {
        try {
            User::create($request->input());

            return response()->json(['status' => 'Success', 'message' => 'User Registration successful']);

        } catch (Exception $exception) {
            return response()->json(['status' => 'failed', 'message' => $exception->getMessage()]);
        }
    }

//    Login
    function login(Request $request)
    {
        try {

            $user = User::where('email', '=', $request->input('email'))
                ->where('password', '=', $request->input('password'))
                ->count();


            if ($user == 1) {

                $token= JWTToken::createToken($request->input('email'));

                return response()->json([
                    'status' => 'Success', 'message' => "login successful", "token"=>$token,
                ])->cookie('token',$token,time()+60*60);

            } else {
                return response()->json([
                    'status' => 'Failed', 'message' => "No user found"
                ]);
            }

        }
            catch(Exception $exception)
           {
                    return response()->json([
                        'status' => 'Failed', 'message' => $exception->getMessage()
                    ]);


                 }

    }

    function profile(Request $request)
    {
        $email= $request->header('email');



            return     $email;

//                User::where('email',$email)->first();
    }


    function logOut()
    {
        return redirect('/loginPage')->cookie('token','',time()-60*60);
    }
}
