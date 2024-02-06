<?php

namespace App\Http\Controllers;

use App\Helper\responseHelper;
use App\Models\Product;
use App\Models\ProductCart;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductCartController extends Controller
{
    function createCart(Request $request): JsonResponse
    {
        try {


            $user_id = $request->header('id');
            $product_id = $request->input('product_id');
            $color = $request->input('color');
            $size = $request->input('size');
            $qty = $request->input('qty');

            $unit_price = 0;
            $product = Product::where('id', $product_id)->first();
            if ($product->discount == 1) {
                $unit_price = $product->discount_price;
            } else {
                $unit_price = $product->price;
            }
            $total_price =intval($qty * $product->discount_price) ;

            $data = ProductCart::updateOrCreate(['user_id' => $user_id, 'product_id' => $product_id],
                [
                    'user_id' => $user_id,
                    'product_id' => $product_id,
                    'color' => $color,
                    'size' => $size,
                    'qty' => $qty,
                    'price' => $total_price

                ]);

            return responseHelper::out('success', $data, 201);
        } catch (Exception $exception) {
            return responseHelper::out('failed', $exception->getMessage(), 200);
        }
    }


    function cartList(Request $request): JsonResponse
    {
        $user_id = $request->header('id');
        $data = ProductCart::where('user_id', $user_id)->with('product')->get();

        return responseHelper::out('success', $data, 200);
    }

    function removeCart(Request $request):JsonResponse
    {
        $user_id = $request->header('id');
        $count = ProductCart::where('user_id', $user_id)->where('product_id', $request->product_id)->count();
        if ($count) {
            $data = ProductCart::where('user_id', $user_id)->where('product_id', $request->product_id)->delete();
            return responseHelper::out('success', $data, 200);
        } else {

            return responseHelper::out('failed', 'cart product doesnt exist', 200);
        }


    }
}
