<?php

namespace App\Http\Controllers;

use App\Models\Billingdetails;
use App\Models\customers;
use App\Models\OrderProduct;
use App\Models\serviceOrderCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class customerdashboard extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('customerlog');
    }

    // customer_dashboard
    function customer_dashboard(){
        return view('customer.customer_dashboard');
    }

    // customer_order_history
    function customer_order_history(){
        $user_phone = Auth::guard('customerauth')->user()->customer_phone;

        $billingdetails = Billingdetails::where('customer_phone', $user_phone)->with('rel_to_orderpro')->with('rel_to_order')->get();
        $serviceorders = serviceOrderCart::where('phone', $user_phone)->get();

        // $serviceproductorders = $billingdetails->merge($serviceorders);
        return view('customer.history', [
            'serviceorders'=>$serviceorders,
            'billingdetails'=>$billingdetails,
        ]);
    }

}
