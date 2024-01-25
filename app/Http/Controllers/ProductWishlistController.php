<?php

namespace App\Http\Controllers;

use App\Helper\responseHelper;
use App\Models\ProductWish;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductWishlistController extends Controller
{
    function createWish(Request $request): JsonResponse
    {
        try {
            $user_id = $request->header('id');
            $data = ProductWish::updateOrCreate(['user_id' => $user_id, 'product_id' => $request->input('product_id')]
                , ['user_id' => $user_id, 'product_id' => $request->input('product_id')]);

            return responseHelper::out('success', $data, 201);
        } catch (Exception $exception) {
            return responseHelper::out('failed', $exception->getMessage(), 201);
        }
    }

    function wishList(Request $request): JsonResponse
    {
        $user_id = $request->header('id');
        $data = ProductWish::where('user_id', $user_id)->with('wish')->get();

        return responseHelper::out('success', $data, 201);
    }

    function removeWish(Request $request):JsonResponse
    {
        $user_id = $request->header('id');
       $count= ProductWish::where(['user_id'=>$user_id,'product_id'=>$request->product_id])->count();

        if ($count) {
            ProductWish::where(['user_id' => $user_id, 'product_id' => $request->product_id])->delete();

            return responseHelper::out('success', 'product removed from wish list', 200);
        }
        else
        {
            return responseHelper::out('failed', 'product not found', 200);
        }
    }
}
