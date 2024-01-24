<?php

namespace App\Http\Controllers;

use App\Helper\responseHelper;
use App\Models\CustomerProfile;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ProfileController extends Controller
{
    function createProfile(Request $request):JsonResponse
    {
        try {

        $user_id= $request->header('id');
        $request->merge(['user_id'=>$user_id]);

       $data= CustomerProfile::updateOrCreate(['user_id'=>$user_id],$request->input());

        return responseHelper::out('success',$data,201);
        }
        catch (Exception $exception)
        {
            return responseHelper::out($exception->getMessage(),null,200);
        }
    }

    function profileList(Request $request):JsonResponse
    {
        $user_id= $request->header('id');

        $data= CustomerProfile::where('user_id',$user_id)->with('user')->first();

        return responseHelper::out('success',$data,200);

    }
}

