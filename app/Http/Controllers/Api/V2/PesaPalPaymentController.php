<?php
namespace App\Http\Controllers\Api\V2;



use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;




class PesaPalPaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */


    
    public function __construct()
    {
    

    }

    public function initiate_pesa_payment(Request $request)
    {

        
        $consumerKey = env('PESAPAL_CONSUMER_KEY');
        $consumerSecret = env('PESAPAL_CONSUMER_SECRET');


        $response = Http::withBasicAuth($consumerKey, $consumerSecret)
            ->post('https://cybqa.pesapal.com/pesapalv3/api/Auth/RequestToken');
            // ->post('https://www.pesapal.com/API/Auth/RequestToken');

        \Log::info('PesaPal Response: ' . json_encode($response->json()));
            // if ($response->successful()) {
            return $response;
            // ()->json(['success' => true, 'token' => $token]);
        // } else {
        //     return response()->json(['success' => false, 'token' => null]);
        // }


    }


}