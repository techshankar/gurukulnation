<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class PhonePecontroller extends Controller
{
    public function phonePe()
    {
        $data = array (
            'merchantId' => 'PHONEPEPGTESTUAT54',
            'merchantTransactionId' => 'MT7850590068188104',
            'merchantUserId' => 'MUID123',
            'amount' => 219900,
            'redirectUrl' => 'webhook.site',
            'redirectMode' => 'POST',
            'callbackUrl' => 'webhook.site',
            'mobileNumber' => '9999999999',
            'paymentInstrument' => 
            array (
            'type' => 'PAY_PAGE',
            ),
        );

        $encode = base64_encode(json_encode($data));

       



        $saltKey = 'eb94b389-9708-439e-a03b-333941a6be6a';
        $saltIndex = 1;

        $string = $encode.'/pg/v1/pay'.$saltKey;
        $sha256 = hash('sha256',$string);

        $finalXHeader = $sha256.'###'.$saltIndex;


        $url = "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay";

        $response = Curl::to($url)
                ->withHeader('Content-Type:application/json')
                ->withHeader('X-VERIFY:'.$finalXHeader)
                ->withData(json_encode(['request' => $encode]))
                ->post();

        $rData = json_decode($response);

        return redirect()->to($rData->data->instrumentResponse->redirectInfo->url);
    }

    public function response(Request $request)
    {
        $input = $request->all();

        $saltKey = '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399';
        $saltIndex = 1;

        $finalXHeader = hash('sha256','/pg/v1/status/'.$input['merchantId'].'/'.$input['transactionId'].$saltKey).'###'.$saltIndex;

        $response = Curl::to('https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/status/'.$input['merchantId'].'/'.$input['transactionId'])
                ->withHeader('Content-Type:application/json')
                ->withHeader('accept:application/json')
                ->withHeader('X-VERIFY:'.$finalXHeader)
                ->withHeader('X-MERCHANT-ID:'.$input['transactionId'])
                ->get();

        dd(json_decode($response));
    }
}    