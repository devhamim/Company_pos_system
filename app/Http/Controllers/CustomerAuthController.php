<?php

namespace App\Http\Controllers;

use App\Models\Billingdetails;
use App\Models\Category;
use App\Models\CustomerAuth;
use App\Models\customers;
use App\Models\Order;
use App\Models\OrderProduct;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use Laravel\Socialite\Facades\Socialite;
use Http;

class CustomerAuthController extends Controller
{
    // customer_login
    function customer_login(){
        return view('customer.customer_login');
    }


    // customer_number_login
    function customer_number_login(Request $request){
        if(customers::where('customer_phone', $request->number)->exists()){

            $verify_code = rand(100000, 999999);
            customers::where('customer_phone', $request->number)->update([
                'mobile_verify'=>$verify_code,
            ]);

            $smsqApiKey = "OwvBJvQgd/a6OmOiw7lKD73ZUgZ9StYVMNmpmrn1vV0=";
            $smsqClientId = "e9d52cb4-e058-406c-a8ac-30edee778177";
            $smsqSenderId = "8809617620771";
            $smsqMessage = 'Your 6 digit verify code is '.$verify_code;

            $smsqMessage = urlencode($smsqMessage);
            $smsqMobileNumbers = '+88' .$request->number;

            $smsqUrl = "https://api.smsq.global/api/v2/SendSMS?ApiKey=$smsqApiKey&ClientId=$smsqClientId&SenderId=$smsqSenderId&Message=$smsqMessage&MobileNumbers=$smsqMobileNumbers";

            $response = Http::get($smsqUrl);

            $number_varify = [
                'verify_code'=>$verify_code,
                'customer_phone'=>$request->number,
            ];
            return view('customer.customer_number_verify', $number_varify);
        }
        else{
            echo 'nai';
        }
    }

    // customer_verify_view
    function customer_verify_view($id){

        $number_varifys = customers::where('id', $id)->get();
        return view('customer.customer_number_verify',[
            'number_varifys'=>$number_varifys,
        ]);
    }

    // customer_verify
    function customer_verify(Request $request){
        $number_verify = customers::where('mobile_verify', $request->verify)->first();
        if($number_verify){
            Auth::guard('customerauth')->login($number_verify);
            return redirect()->route('customer.dashboard');
        }
        else{
            return back()->with('error','OTP not match');
        }
    }



    //customer_auth_register
    function customer_auth_register(Request $request) {
        if(CustomerAuth::where('email', $request->customer_email_reg)->exists()){
            return back()->withError('You already have a account.');
        }
        else{
        if($request->customer_password_reg == $request->customer_password_reg_confirmation) {
            CustomerAuth::create([
                'name' => $request->customer_name_reg,
                'email' => $request->customer_email_reg,
                'password' => bcrypt($request->customer_password_reg),
                'created_at' => Carbon::now(),
            ]);
            return back()->withSuccess('Customer register successfully now please login.');
            } else {
                return back()->withError('Cutomer password credentials do not matched.');
            }
        }
    }

    // customer_auth_login
    function customer_auth_login(Request $request) {
        if(Auth::guard('customerauth')->attempt(['email' => $request->customer_email_signin, 'password' => $request->customer_password_signin])) {
            return back()->withSuccess('Customer logged in successfully');
        } else {
            return back()->withError('Please create an account');
        }
    }

    // customer_auth_logout
    function customer_auth_logout() {
        Auth::guard('customerauth')->logout();
        // return back()->withSuccess('Customer successfully logout');
        return redirect('/')->withSuccess('Customer successfully logout');
    }

    // customer_profile
    function customer_profile() {
        $categories = Category::all();
        // $orders = Order::where('customer_id', Auth::guard('customerauth')->id())->get();
        $orders = OrderProduct::where('customer_id', Auth::guard('customerauth')->id())->get();
        $Billingdetails = Billingdetails::where('email', Auth::guard('customerauth')->user()->email)->get();
        return view('frontend.customer_dashboard.customer_dashboard', [
            'categories' => $categories,
            'orders' => $orders,
            'Billingdetails' => $Billingdetails,
        ]);
    }

    // customer profile update
    function customer_profile_update(Request $request) {
        // if($request->password == null) {
        //     if($request->image == null) {
        //         Customerauth::find(Auth::guard('customerauth')->id())->update([
        //             'name' => $request->name,
        //             'email' => $request->email,
        //             'country' => $request->country,
        //             'address' => $request->address,
        //         ]);
        //         return back()->withSuccess('Updated successfully without password or image.');
        //     } else {
        //         if(Auth::guard('customerauth')->user()->image != null) {
        //             $delete_from = public_path('uploads/customer/'.Auth::guard('customerauth')->user()->image);
        //             unlink($delete_from);
        //         }
        //         $uploaded_image = $request->image;
        //         $ext = $uploaded_image->getClientOriginalExtension();
        //         $file_name = Auth::guard('customerauth')->id().'.'.$ext;
        //         Image::make($uploaded_image)->resize(300, 200)->save(public_path('uploads/customer/'.$file_name));
        //         Customerauth::find(Auth::guard('customerauth')->id())->update([
        //             'name' => $request->name,
        //             'email' => $request->email,
        //             'country' => $request->country,
        //             'address' => $request->address,
        //             'image' => $file_name,
        //         ]);
        //         return back()->withSuccess('Updated successfully without password.');
        //     }
        // } else {
        //    if($request->password == $request->password_confirmation) {
        //     if($request->image == null) {
        //         Customerauth::find(Auth::guard('customerauth')->id())->update([
        //             'name' => $request->name,
        //             'email' => $request->email,
        //             'country' => $request->country,
        //             'address' => $request->address,
        //             'password' => bcrypt($request->password),
        //         ]);
        //         return back()->withSuccess('Updated successfully without image');
        //     } else {
        //         if(Auth::guard('customerauth')->user()->image != null) {
        //             $delete_from = public_path('uploads/customer/'.Auth::guard('customerauth')->user()->image);
        //             unlink($delete_from);
        //         }
        //         $uploaded_image = $request->image;
        //         $ext = $uploaded_image->getClientOriginalExtension();
        //         $file_name = Auth::guard('customerauth')->id().'.'.$ext;
        //         Image::make($uploaded_image)->resize(300, 200)->save(public_path('uploads/customer/'.$file_name));
        //         Customerauth::find(Auth::guard('customerauth')->id())->update([
        //             'name' => $request->name,
        //             'email' => $request->email,
        //             'country' => $request->country,
        //             'address' => $request->address,
        //             'image' => $file_name,
        //             'password' => bcrypt($request->password),
        //         ]);
        //         return back()->withSuccess('Updated successfully.');
        //     }
        //    } else {
        //     return back()->withError('Passwords do not matched');
        //    }
        // }
        if($request->password != null) {
            if($request->password == $request->password_confirmation) {
                CustomerAuth::find(Auth::guard('customerauth')->id())->update([
                    'password' => bcrypt($request->password),
                    'updated_at' => Carbon::now(),
                ]);
                return back()->withSuccess('Profile updated successfully.');
            } else {
                return back()->withError('Passwords do not matched.');
            }
        }
        if($request->image != null) {
            if(Auth::guard('customerauth')->user()->image != null) {
                $delete_from = public_path('uploads/customer/'.Auth::guard('customerauth')->user()->image);
                unlink($delete_from);
            }
            $uploaded_image = $request->image;
            $ext = $uploaded_image->getClientOriginalExtension();
            $file_name = Auth::guard('customerauth')->id().'.'.$ext;
            Image::make($uploaded_image)->save(public_path('uploads/customer/'.$file_name));
            CustomerAuth::find(Auth::guard('customerauth')->id())->update([
                'image' => $file_name,
                'updated_at' => Carbon::now(),
            ]);
            return back()->withSuccess('Profile updated successfully.');
        }

        CustomerAuth::find(Auth::guard('customerauth')->id())->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'updated_at' => Carbon::now(),
        ]);

        return back()->withSuccess('Profile updated successfully.');


    }

    // order_cancel
    function order_cancel($order_id){
        OrderProduct::find($order_id)->delete();
        return back();
    }


    //social google
    function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    function handleGoogleCallback(){
        $user = Socialite::driver('google')->user();

        if(CustomerAuth::where('email', $user->getEmail())->exists()){
            if(Auth::guard('customerlogin')->attempt(['email'=>$user->getEmail(), 'password'=>'abc@123'])){
                return redirect('/');
            }
        }
        else{
            CustomerAuth::insert([
                'name'=>$user->getName(),
                'email'=>$user->getEmail(),
                'password'=>bcrypt('abc@123'),
                'created_at'=>Carbon::now(),
            ]);
            if(Auth::guard('customerlogin')->attempt(['email'=>$user->getEmail(), 'password'=>'abc@123'])){
                return redirect('/');
            }
        }
    }

    function order_view($order_id){
        $categories = Category::all();
        $order_ids = "#".$order_id;
        $orders_details = Order::where('order_id', $order_ids)->get();
        $orderproducts = OrderProduct::where('order_id', $order_ids)->get();
        return view('frontend.customer_dashboard.customer_order_list',[
            'categories'=>$categories,
            'orders_details'=>$orders_details,
            'orderproducts'=>$orderproducts,
        ]);
    }
}
