<?php

namespace App\Http\Controllers;

use App\Helper\responseHelper;
use App\Models\ProductSlider;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductSliderController extends Controller
{
    function productSlider():JsonResponse
    {
        $data=ProductSlider::all();

        return responseHelper::out('success', $data, 200);
    }

}
