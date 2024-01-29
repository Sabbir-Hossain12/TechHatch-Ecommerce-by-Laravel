<?php

namespace App\Http\Controllers;

use App\Helper\responseHelper;
use App\Models\Brand;
use Exception;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    function brandList()
    {
        try {
            $data= Brand::all();
            return responseHelper::out('success',$data,200);
        }
        catch (Exception $e)
        {
            return responseHelper::out('failed',$e->getMessage(),200);
        }

    }
}
