<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\Category;
use App\Models\Inventory;
use App\Models\Order;
use App\Models\privacy_policy;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\serviceOrderCart;
use App\Models\terms_condition;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Log;
use Illuminate\Support\Facades\Http;

class FrontendController extends Controller
{
    //home
    function home() {


        $categories = Category::all();
        $category= Category::take(8)->get();
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


        return view('frontend.home.index', [
            'categories' => $categories,
            'categoryy' => $category,
            'products' => $products,
            'latest_products' => $latest_products,
            // 'top_selling_products' => $top_selling_products,
            'discount_products' => $discount_products,
            'banners' => $banners,

            // 'discount_products_count' => $discount_products_count,
        ]);
    }

    // about
    function about(){
        // $categories = Category::all();
        $category= Category::take(8)->get();
        return view('frontend.about.about', [
            // 'categories'=>$categories,
            'categoryy' => $category,
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

        $order_id = 'INV'.'-'.rand(10000,99999);
            $sub_total = $request->quantity*$request->price;
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
                'price'=> $request->price,
                'sub_total'=> $sub_total,
                'coupon'=> $request->coupon,
                'total'=> $sub_total-$request->coupon,
                'created_at'=>Carbon::now(),
            ]);


    $smsqApiKey = "OwvBJvQgd/a6OmOiw7lKD73ZUgZ9StYVMNmpmrn1vV0=";
    $smsqClientId = "e9d52cb4-e058-406c-a8ac-30edee778177";
    $smsqSenderId = "8809617620771";
    $smsqMessage = 'Dear ' .$request->name.',
Thank you for placing your order with Nugortech IT!
Your mobile varify code is: '.$mobile_verify.'
Our team will begin working on your order shortly. Expect updates soon!

Best Regards,
Nugortech IT
www.nugortechit.com';

    $smsqMessage = urlencode($smsqMessage);
    $smsqMobileNumbers = '+88' .$request->phone;

    $smsqUrl = "https://api.smsq.global/api/v2/SendSMS?ApiKey=$smsqApiKey&ClientId=$smsqClientId&SenderId=$smsqSenderId&Message=$smsqMessage&MobileNumbers=$smsqMobileNumbers";

    $response = Http::get($smsqUrl);

    return redirect()->route('service.order.otp',$service_cart_id);

    }

    // service_order_otp
    function service_order_otp($id){

        $service_order_cart = serviceOrderCart::where('id', $id)->get();

            return view('frontend.service.mobile_varify', [
                'service_order_cart'=>$service_order_cart,
            ]);
    }

    // number_otp
    function number_otp(Request $request){
        $mobile_otp =  $request->mobile_varify_code;

        $service_cart = serviceOrderCart::where('id', $request->service_cart_id)->get();

        if($request->mobile_varify_code == $service_cart->first()->mobile_verify){
            serviceOrderCart::where('id', $service_cart->first()->id)->update([
                'status'=> 1,
            ]);
            return redirect()->route('service.order.success');
        }
        else{
            return back()->with('error','OTP not match');
        }
    }

    // service_order_success
    function service_order_success(){
        return view('frontend.checkout.order_success');
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
}
