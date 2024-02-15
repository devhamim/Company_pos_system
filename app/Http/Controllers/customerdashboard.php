<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
