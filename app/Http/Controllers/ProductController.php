<?php

namespace App\Http\Controllers;

use App\Helper\responseHelper;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\ProductSlider;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Mockery\Exception;

class ProductController extends Controller
{

  public function viewProduct()
  {
      return view('pages.product-page');
  }

    function productList():JsonResponse
    {
        try {
            $data = Product::all();

            return responseHelper::out('success', $data, 200);
        } catch (Exception $exception) {
            return responseHelper::out($exception->getMessage(), null, 200);
        }
    }

    function productListByBrand(Request $request):JsonResponse
    {
        try {
            $data = Product::where('brand_id', $request->brand_id)->with('brand', 'category')->get();
            return responseHelper::out('success', $data, 200);
        } catch (Exception $exception) {
            return responseHelper::out($exception->getMessage(), null, 200);
        }
    }

    function productListByCategory(Request $request):JsonResponse
    {

        try {
            $data = Product::where('category_id', $request->category_id)->with('brand', 'category')->get();
            return responseHelper::out('success', $data, 200);
        } catch (Exception $exception) {
            return responseHelper::out($exception->getMessage(), null, 200);
        }
    }

    function productListByRemark(Request $request):JsonResponse
    {
        try {
            $data = Product::where('remarks', $request->remark)->with('brand', 'category')->get();
            return responseHelper::out('success', $data, 200);
        } catch (Exception $exception) {
            return responseHelper::out($exception->getMessage(), null, 200);
        }
    }


    function productDetailsById(Request $request):JsonResponse
    {
        try {
            $data= ProductDetail::where('product_id',$request->id)->with('product','product.brand','product.category')->first();
            return responseHelper::out('success', $data, 200);

        }
        catch (Exception $exception)
        {
            return responseHelper::out($exception->getMessage(), null, 200);
        }
    }







}
