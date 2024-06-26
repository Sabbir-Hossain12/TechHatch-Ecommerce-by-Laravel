<?php

namespace App\Http\Controllers;


use App\Helper\JWTToken;
use App\Mail\OtpMail;
use App\Models\User;
use Exception;
use Firebase\JWT\JWT;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Helper\responseHelper;
use Illuminate\Support\Facades\Mail;

class userController extends Controller
{


    function loginPage()
    {

    }


//    Login
    function login(Request $request)
    {
        try {

            $request->validate(
                [
                    'email' => 'required|email|string'
                ]
            );

            $email = $request->input('email');
            $otp = rand(1000, 9999);
            User::updateOrInsert(['email' => $email], ['email' => $email, 'otp' => $otp]);

            $count = User::where('email', $email)->count();

            if ($count) {
                Mail::to($email)->send(new OtpMail($otp));

                return responseHelper::out('success',  null, 200);

            } else {
                return responseHelper::out('failed', null, 200);
            }


        } catch (Exception $exception) {

            return responseHelper::out($exception->getMessage(),null, 200);

        }

    }

    function verifyLogin(Request $request)
    {
        try {

            $request->validate(
                [
                    'otp' => 'required|min:4|max:4'
                ]
            );

            $email = $request->input('email');
            $otp = $request->input('otp');

            $id = User::where('email', $email)->where('otp', $otp)->value('id');
            $count = User::where('email', $email)->where('otp', $otp)->count();

            if ($count == 1) {

                $token = JWTToken::createToken($email, $id);
                User::where('email', $email)->update(['otp' => 0]);
                return responseHelper::out('success', null, 200)->cookie('token', $token, 30 * 24 * 3600);

            } else {
                return responseHelper::out('failed', null, 200);
            }

        } catch (Exception $exception) {
            return responseHelper::out( $exception->getMessage(), '', 200);
        }

    }


    function logOut()
    {
        return   redirect('/')->cookie('token', '', -1);
    }
}
