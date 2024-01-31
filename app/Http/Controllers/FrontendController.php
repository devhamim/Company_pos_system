<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\Category;
use App\Models\Inventory;
use App\Models\Order;
use App\Models\privacy_policy;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\terms_condition;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Cookie;

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
