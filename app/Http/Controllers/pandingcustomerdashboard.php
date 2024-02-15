<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pandingcustomerdashboard extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('pandingcustomer');
    }
    
    // panding_customer_dashboard
    function panding_customer_dashboard(){
        return view('customer.panding_customer_dashboard');
    }
}
