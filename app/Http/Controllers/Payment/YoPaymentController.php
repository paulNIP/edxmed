<?php

namespace App\Http\Controllers\Payment;

use App\Services\YoPaymentsService;


class YoPaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function pay(YoPaymentsService $yoPayments)
    {
        $response = $yoPayments->sendMobileMoney('2567XXXXXXXX', 10000, 'Product Payment');

        if ($response->success) {
            return 'Payment initiated successfully.';
        } else {
            return 'Payment failed: ' . $response->message;
        }
    }
}
