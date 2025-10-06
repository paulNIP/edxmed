<?php

namespace App\Services;



use YoUganda\YoPayments\YoAPI;

class YoPaymentService
{
    protected $yo;

    public function __construct()
    {
        $this->yo = new YoAPI(env('YOPAYMENTS_USERNAME'),env('YOPAYMENTS_PASSWORD'),env('YOPAYMENTS_MODE'));
    }

    public function sendMobileMoney($phone, $amount, $reason = 'Payment')
    {
        $response = $this->yo->debitAccount([
            'amount'            => $amount,
            'msisdn'            => $phone,
            'narrative'         => $reason,
            'external_reference'=> uniqid('trx_'),
        ]);

        return $response;
    }


}