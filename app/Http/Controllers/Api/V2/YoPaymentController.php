<?php
namespace App\Http\Controllers\Api\V2;

use App\Services\YoPaymentsService;

use YoUganda\YoPayments\YoAPI;
use Illuminate\Http\Request;


class YoPaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */

    protected $yo;
    
    public function __construct()
    {
    
        $this->yo = new YoAPI(env('YOPAYMENTS_USERNAME'),env('YOPAYMENTS_PASSWORD'),env('YOPAYMENTS_MODE'));
    }


    public function initiate_yo_payment(Request $request)
    {

        // Create a unique transaction reference that you will reference this payment with
        $transaction_reference = uniqid('trx_');
        $this->yo->set_external_reference($transaction_reference);

        // Set nonblocking to TRUE so that you get an instant response
        $this->yo->set_nonblocking("TRUE");

        // Set an instant notification url where a successful payment notification POST will be sent
        // See documentation on how to handle IPN
        $this->yo->set_instant_notification_url('example.com/ipn.php');

        // Set a failure notification url where a failed payment notification POST will be sent
        // See documentation on how to handle IPNs
        $this->yo->set_failure_notification_url('example.com/fpn.php');

        $response = $this->yo->ac_deposit_funds($request->phoneNumber, $request->totalAmount, 'Eloica order '.$transaction_reference);

        //Wait a little and check for the status of the transaction.
        sleep(25);

        $transaction = $this->yo->ac_transaction_check_status(NULL, $transaction_reference);
        
        if(strcmp($transaction['TransactionStatus'],'SUCCEEDED')==0){

            return response()->json(['success' => true, 'message' => 'Payment successful']);
            
        }else{
            return response()->json(['success' => false, 'message' => 'Payment failed']);
        }

    }

    function check_transaction($transaction_reference)
    {


        $transaction = $this->yo->ac_transaction_check_status(NULL, $transaction_reference);
        if(strcmp($transaction['TransactionStatus'],'SUCCEEDED')==0){
            // Transaction was completed and funds were deposited onto the account
            // Save data into the database
            return ['success' => true, 'message' => 'Payment successful'];
        }else{
            return response()->json(['success' => false, 'message' => 'Payment failed']);
        }
    }
}