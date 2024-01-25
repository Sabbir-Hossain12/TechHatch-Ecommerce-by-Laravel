<?php

namespace App\Http\Controllers;

use App\Helper\responseHelper;
use App\Models\CustomerProfile;
use App\Models\ProductReview;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    function createReview(Request $request): JsonResponse
    {
        try {

            $user_id = $request->header('id');
            $customer = CustomerProfile::where('user_id', $user_id)->first();
            $request->merge(['customer_id' => $customer->id]);

            if ($customer) {


                $data = ProductReview::updateOrCreate(
                    ['customer_id' => $customer->id, 'product_id' => $request->input('product_id')], $request->input()
                );


                return responseHelper::out('success', $data, 201);
            } else {
                return responseHelper::out('failed', 'user profile not found', 200);
            }
        } catch (Exception $exception) {
            return responseHelper::out($exception->getMessage(), null, 200);
        }
    }

    function listReview(Request $request): JsonResponse
    {
        $data = ProductReview::where('product_id', $request->product_id)->with(['customer'=>function($query){
            $query->select('id','cus_name');
        }])->get();

        return responseHelper::out('success', $data, 200);
    }

}
