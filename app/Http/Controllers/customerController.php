<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customers;
use Carbon\Carbon;

class customerController extends Controller
{
    //customer_list
    function customer_list(){
        $customer_list = customers::orderBy('created_at', 'desc')->get();
        return view('backend.customer.customer',[
            'customer_list'=>$customer_list,
        ]);
    }

    // customer_add
    function customer_add(Request $request){
        $request->validate([
            'customer_name'=>'required',
            'busines_name'=>'required',
            'customer_phone'=>'required',
        ]);

        customers::insert([
            'customer_name'=> $request->customer_name,
            'busines_name'=> $request->busines_name,
            'customer_phone'=> $request->customer_phone,
            'customer_email'=> $request->customer_email,
            'customer_address'=> $request->customer_address,
            'created_at'=> Carbon::now(),
        ]);
        return back()->withSuccess('Customer add successfully');
    }

    function customer_delete($id){
        customers::find($id)->delete();
        return back()->withError('Customer Delete successfully');
    }
}
