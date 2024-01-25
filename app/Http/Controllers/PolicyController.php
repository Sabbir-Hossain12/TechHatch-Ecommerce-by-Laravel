<?php

namespace App\Http\Controllers;

use App\Helper\responseHelper;
use App\Models\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    function showPolicy(Request $request)
    {
      $data=  Policy::where('type',$request->type)->first();

        return responseHelper::out('success',$data,200);
    }
}
