<?php

namespace App\Helper;

use Illuminate\Http\JsonResponse;

class responseHelper
{
    static function out($status,$message,$data,$code):JsonResponse
    {
        return response()->json(['status'=>$status,'message'=>$message,'data'=>$data],$code);
    }

}
