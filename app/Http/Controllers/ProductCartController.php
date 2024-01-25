<?php

namespace App\Http\Controllers;

use App\Models\ProductCart;
use Illuminate\Http\Request;

class ProductCartController extends Controller
{
    function createCart(Request $request)
    {
           $user_id= $request->header('id');
           $request->merge(['user_id'=>$user_id]);

//           ProductCart::updateOrCreate([
//               
//           ])

    }
}
