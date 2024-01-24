<?php

namespace App\Http\Controllers;

use App\Helper\responseHelper;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function categoryList(Request $request)
    {

        try{

       $data= Category::all();
        return responseHelper::out('success',$data,200);
        }
        catch (Exception $exception)
        {

            return responseHelper::out($exception->getMessage(),null,200);
        }

    }
}
