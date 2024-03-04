<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\customer_registers;
use App\Models\customers;
use App\Models\Inventory;
use App\Models\Order;
use App\Models\privacy_policy;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\protfolio;
use App\Models\protfoliogallery;
use App\Models\serviceOrderCart;
use App\Models\subscribe;
use App\Models\team;
use App\Models\terms_condition;
use App\Models\testmonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Log;
use UddoktaPay\LaravelSDK\UddoktaPay;
use Http;
use Illuminate\Support\Facades\Redirect;

class FrontendController extends Controller
{

    //home
    function home() {
        $categories = Category::all();
        $category= Category::where('status', 1)->take(8)->get();
        $products = Product::where('status', '1')->get();
        // $top_selling_products = Order::groupBy('product_id')
        // ->selectRaw('sum(total) as sum, product_id')
        // ->havingRaw('sum >= 1')
        // ->take(3)
        // ->orderBy('sum', 'DESC')
        // ->get();
        $latest_products = Product::where('status', '1')->latest()->get();
        $discount_products = Product::where('status', '1')->where('product_discount', '!=', null)->get();
        // $discount_products_count = Product::where('status', '1')->where('product_discount', '!=', null)->where('validity', '>', Carbon::now())->get();
        $banners = banner::all();
        $portfolios = protfolio::where('status', 1)->get();
        $testmonials = testmonial::where('status', 1)->get();

        return view('frontend.home.index', [
            'categories' => $categories,
            'categoryy' => $category,
            'products' => $products,
            'latest_products' => $latest_products,
            // 'top_selling_products' => $top_selling_products,
            'discount_products' => $discount_products,
            'banners' => $banners,
            'portfolios' => $portfolios,
            'testmonials' => $testmonials,

            // 'discount_products_count' => $discount_products_count,
        ]);
    }

    // about
    function about(){
        $teams = team::where('status', 1)->get();
        $category= Category::where('status', 1)->take(8)->get();
        $testmonials= testmonial::where('status', 1)->get();
        return view('frontend.about.about', [
            'teams'=>$teams,
            'categoryy' => $category,
            'testmonials' => $testmonials,
        ]);
    }


    // our_services
    function our_services() {
        $services = Category::where('status', '1')->get();
        return view('frontend.service.index', compact(['services']));
    }

    // services_product
    function services_product($id) {
        $services = Category::where('status', '1')->where('id', $id)->get();
        $products = Product::where('status', '1')->where('category_id', $id)->get();
        return view('frontend.service.details', compact(['products','services']));
    }

    // services_product_details
    function services_product_details($slug) {
        $products = Product::where('status', '1')->where('slug', $slug)->get();
        $productgallery = ProductGallery::where('product_id', $products->first()->id)->get();
        return view('frontend.service.product_details', compact(['products','productgallery']));
    }


    // services_product_details
    function services_product_checkout(Request $request){
        $product_id = Product::where('id', $request->product_id)->first() ;
        return view('frontend.checkout.checkout',[
            'product_id'=>$product_id,
        ]);
    }

    // services_order_checkout
    function services_order_checkout(Request $request){
        $request->validate([
            'name'=> 'required',
            'phone'=>'required',
            'business_name'=>'required',
            'quantity'=>'required | min:1',
        ]);

            if($request->coupon){
                $coupon_name = Coupon::where('coupon_name', $request->coupon)->first();
                $coupons = $coupon_name->coupon_amount;
            }
            else{
              $coupons = 0;
            }
            $price = Product::where('id', $request->product_id)->first()->product_discount;
            $order_id = 'INV'.'-'.rand(10000000,99999999);
            $sub_total = $request->quantity*$price;
            $aftercoupon = $sub_total*$coupons/100;
            $mobile_verify = rand(100000,999999);
            $service_cart_id = serviceOrderCart::insertGetId([
                'order_id'=> $order_id,
                'product_id'=> $request->product_id,
                'name'=> $request->name,
                'phone'=> $request->phone,
                'business_name'=> $request->business_name,
                'note'=> $request->note,
                'mobile_verify'=> $mobile_verify,
                'quantity'=> $request->quantity,
                'price'=> $price,
                'sub_total'=> $sub_total,
                'coupon'=> $coupons,
                'total'=> $sub_total-$aftercoupon,
                'created_at'=>Carbon::now(),
            ]);

    $smsqApiKey = "OwvBJvQgd/a6OmOiw7lKD73ZUgZ9StYVMNmpmrn1vV0=";
    $smsqClientId = "e9d52cb4-e058-406c-a8ac-30edee778177";
    $smsqSenderId = "8809617620771";
    $smsqMessage = 'Your nugortechit 6 digit verify code is '.$mobile_verify;

    $smsqMessage = urlencode($smsqMessage);
    $smsqMobileNumbers = '+88' .$request->phone;

    $smsqUrl = "https://api.smsq.global/api/v2/SendSMS?ApiKey=$smsqApiKey&ClientId=$smsqClientId&SenderId=$smsqSenderId&Message=$smsqMessage&MobileNumbers=$smsqMobileNumbers";

    $response = Http::get($smsqUrl);

    $request->session()->put('mobile_verify', $mobile_verify);
    $request->session()->put('phone_number', $request->phone);
    $request->session()->put('service_cart_id', $service_cart_id);

    return redirect()->route('service.order.otp');
    }

    // service_order_otp
    function service_order_otp(){
        return view('frontend.service.mobile_varify');
    }

    // number_otp
        function number_otp(Request $request){

        $number_verify = $request->session()->get('mobile_verify');
        $phone_number = $request->session()->get('phone_number');
        $service_cart_id = $request->session()->get('service_cart_id');

            $mobile_otp =  $request->mobile_varify_code;

            $service_cart = serviceOrderCart::where('id', $service_cart_id)->first();

            if($mobile_otp == $number_verify){

                customers::insert([
                    'added_by'=>0,
                    'customer_name'=>$service_cart->name,
                    'customer_phone'=>$phone_number,
                    'busines_name'=>$service_cart->business_name,
                    'mobile_verify'=>null,
                    'created_at'=>Carbon::now(),
                ]);


                    $customer_num = customers::where('customer_phone', $phone_number)->first();
                    if($customer_num){
                        Auth::guard('customerauth')->loginUsingId($customer_num->id);
                    }

                // if(customers::where('customer_phone', $phone_number)->exists()){
                //     $customer_num = customers::where('customer_phone', $phone_number)->first();
                //     if($customer_num){
                //         Auth::guard('customerauth')->loginUsingId($customer_num->id);
                //     }
                // }
                // elseif(customer_registers::where('phone', $phone_number)->exists()){
                //     $customer_num =  customer_registers::where('phone', $phone_number)->first();
                //     if($customer_num){
                //         Auth::guard('customerreg')->loginUsingId($customer_num->id);
                //     }
                // }


                $service_cart->update([
                    'mobile_verify'=> null,
                ]);
                $request->session()->forget('mobile_verify');
                $request->session()->forget('phone_number');

                $apiKey = "c3684b1473dc5b5ab83ec6c9786a4367881b2cae";
                $apiBaseURL = "https://pay.nugortechit.com/api/checkout-v2";
                $uddoktaPay = new UddoktaPay($apiKey, $apiBaseURL);

                $requestData = [
                    'full_name'     => $service_cart->name,
                    'email'         => "test@test.com",
                    'amount'        => $service_cart->total,
                    'metadata'      => [
                        'example_metadata_key' => "example_metadata_value",
                    ],
                    'redirect_url'  => route('service.order.success'),
                    'return_type'   => 'GET',
                    'cancel_url'    => route('service.order.cancel'),
                    'webhook_url'   => route('service.order.ipn'),
                ];

                try {
                    // Initiate payment
                    $paymentUrl = $uddoktaPay->initPayment($requestData);
                    return redirect($paymentUrl);
                } catch (\Exception $e) {
                    return back()->with('error', "Initialization Error: " . $e->getMessage());
                }
                // // demo redirect
                // return redirect()->route('service.order.success')->with('success', 'order success');

            }
            else{
                return back()->with('error','OTP not match');
            }
        }

    // service_order_success
    function service_order_success(Request $request){
        $service_cart_id = $request->session()->get('service_cart_id');
        $service_cart = serviceOrderCart::findOrFail($service_cart_id);
        $service_cart->update(['status' => 1]);
        // return view('frontend.checkout.order_success');
        return redirect()->route('customer.order.history');
    }

    // service_order_cancel\
    function service_order_cancel(Request $request){
        $service_cart_id = $request->session()->get('service_cart_id');
        $service_cart = serviceOrderCart::findOrFail($service_cart_id);
        $service_cart->update(['status' => 0]);
        return redirect('/');
    }
    // service_order_ipn\
    function service_order_ipn(){
        return redirect('/');
    }

    // our_products
    function our_products(){
        return view('frontend.product.index');
    }

    // our_blogs
    function our_blogs(){
        return view('frontend.blogs.index');
    }


    // privacy_policy
    function privacy_policy(){
        $categories = Category::all();
        $privacy_policy = privacy_policy::all();
        return view('frontend.privacy_policy.privacy_policy', [
            'categories'=>$categories,
            'privacy_policy'=>$privacy_policy,
        ]);
    }

    // terms
    function terms(){
        $categories = Category::all();
        $terms = terms_condition::all();
        return view('frontend.terms.terms_and_condition', [
            'categories'=>$categories,
            'terms'=>$terms,
        ]);
    }


    // auth_pay_due
function auth_pay_due(Request $request){
    $service_cart_id = $request->id;
    $request->session()->put('service_cart_id', $service_cart_id);

    $apiKey = "c3684b1473dc5b5ab83ec6c9786a4367881b2cae";
    $apiBaseURL = "https://pay.nugortechit.com/api/checkout-v2";
    $uddoktaPay = new UddoktaPay($apiKey, $apiBaseURL);

    $requestData = [
        'full_name'     => $request->name,
        'email'         => "test@test.com",
        'amount'        => $request->total,
        'metadata'      => [
            'example_metadata_key' => "example_metadata_value",
        ],
        'redirect_url'  => route('service.order.success'),
        'return_type'   => 'GET',
        'cancel_url'    => route('service.order.cancel'),
        'webhook_url'   => route('service.order.ipn'),
    ];

    try {
        // Initiate payment
        $paymentUrl = $uddoktaPay->initPayment($requestData);
        return redirect($paymentUrl);
    } catch (\Exception $e) {
        return back()->with('error', "Initialization Error: " . $e->getMessage());
    }
}

// subscribe_store
function subscribe_store(Request $request){
    $request->validate([
        'email'=>'required',
    ]);

    subscribe::insert([
        'email'=>$request->email,
    ]);
    return back()->with('subscribe', 'You Subscribe Successfully');
}

// portfolio_details
function portfolio_details($slug){
    $protfolio_details = protfolio::where('slug', $slug)->get();
    $protfolio_gallery = protfoliogallery::where('protfolio_id', $protfolio_details->first()->id)->get();
    $protfolio_next = protfolio::where('id', '>', $protfolio_details->first()->id)->orderBy('id')->first();
    $protfolio_preview = protfolio::where('id', '<', $protfolio_details->first()->id)->orderBy('id', 'desc')->first();
    $protfolio_similar = protfolio::where('project_type' ,$protfolio_details->first()->project_type)->where('id', '!=', $protfolio_details->first()->id)->get();

    return view('frontend.portfolio_details.portfolio_details', [
        'protfolio_details'=>$protfolio_details,
        'protfolio_gallery'=>$protfolio_gallery,
        'protfolio_next'=>$protfolio_next,
        'protfolio_preview'=>$protfolio_preview,
        'protfolio_similar'=>$protfolio_similar,
    ]);
}

}
