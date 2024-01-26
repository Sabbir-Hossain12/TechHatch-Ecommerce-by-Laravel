<?php

namespace App\Http\Controllers;

use App\Helper\responseHelper;
use App\Helper\SSLCommerz;
use App\Models\CustomerProfile;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Models\ProductCart;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    function createInvoice(Request $request)
    {
        DB::beginTransaction();
        try {

            $user_id = $request->header('id');
            $user_email = $request->header('email');
            $delivery_status = 'pending';
            $payment_status = 'pending';
            $trans_id = uniqid();

            $profile = CustomerProfile::where('user_id', $user_id)->first();
            $cus_details = "Name: $profile->cus_name, Address:$profile->cus_add, City:$profile->cus_city, Phone: $profile->cus_phone";
            $ship_details = "Name: $profile->ship_name, Address:$profile->ship_add, City:$profile->ship_city, Phone: $profile->ship_phone";

            $total = ProductCart::where('user_id', $user_id)->sum('price');
            $vat = $total * 3 / 100;
            $payable = $total + $vat;

            $invoice = Invoice::where('user_id', $user_id)->create([

                'total' => $total,
                'vat' => $vat,
                'payable' => $payable,
                'cus_details' => $cus_details,
                'ship_details' => $ship_details,
                'tran_id' => $trans_id,
                'delivery_status' => $delivery_status,
                'payment_status' => $payment_status,
                'user_id' => $user_id
            ]);

            $product_cart = ProductCart::where('user_id', $user_id)->get();
            foreach ($product_cart as $cart) {
                InvoiceProduct::create(
                    [
                        'invoice_id' => $invoice->id,
                        'product_id' => $cart['product_id'],
                        'user_id' => $user_id,
                        'qty' => $cart['qty'],
                        'sale_price' => $cart['price']
                    ]
                );
            }
            $paymentMethod= SSLCommerz::InitiatePayment($profile, $payable, $trans_id, $user_email);

            DB::commit();
            return ResponseHelper::Out('success', array(['paymentMethod' => $paymentMethod, 'payable' => $payable, 'vat' => $vat, 'total' => $total]), 200);
        } catch (Exception $exception) {
            DB::rollBack();

            return responseHelper::out('fail', $exception->getMessage(), 200);
        }
    }

    function invoiceList(Request $request)
    {
        $user_id = $request->header('id');
        $data = Invoice::where('user_id', $user_id)->get();
        return responseHelper::out('success', $data, 200);
    }

    function invoiceProductList(Request $request)
    {
        $user_id = $request->header('id');
        $data = InvoiceProduct::where(['user_id' => $user_id, 'invoice_id' => $request->invoice_id])->with('product')->get();
        return responseHelper::out('success', $data, 200);
    }
}
