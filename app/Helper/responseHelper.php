<?php

namespace App\Helper;

use Illuminate\Http\JsonResponse;

class responseHelper
{
    static function out($message,$data,$code):JsonResponse
    {
        return response()->json(['message'=>$message,'data'=>$data],$code);
    }

}
