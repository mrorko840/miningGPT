<?php

namespace App\Http\Controllers;

use App\Models\Gateway;
use App\Models\AutoPayment;
use Illuminate\Http\Request;

class AutoPaymentController extends Controller
{
    public function index()
    {
        $pageTitle = 'eDokanPay Api';
        $autoPayment = AutoPayment::first();
        $gateway = Gateway::where('code', 999)->first();
        $gateway_parameters  = json_decode($gateway->gateway_parameters, true);
        return view('admin.gateways.edokanpay.index', compact('autoPayment', 'pageTitle', 'gateway', 'gateway_parameters'));
    }
    
    public function update(Request $request)
    {
        $autoPayment = AutoPayment::first();
        $autoPayment->api_key       = $request->api_key;
        $autoPayment->client_key    = $request->client_key;
        $autoPayment->secret_key    = $request->secret_key;
        $autoPayment->save();
        
        $cls = 'success';
        $notify = 'Api Credential Updated Successfully';
        return response()->json(['msg'=>$notify, 'cls'=>$cls]);
    }

    // {"currency":"BDT","rate":100}

    public function detailsUpdate(Request $request){
        $parameters = collect(($request->gateway_parameters));
        // dd($parameters);

        $autoPayment = AutoPayment::first();
        $gateway = Gateway::where('code', 999)->first();
        $gateway->gateway_parameters = $parameters;
        $gateway->save();
        $cls = 'success';
        $notify = 'Payment Details Updated Successfully';
        return response()->json(['msg'=>$notify, 'cls'=>$cls]);
    }
    
    public function destroy(AutoPayment $autoPayment)
    {
        //
    }
}
