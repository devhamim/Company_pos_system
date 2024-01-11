<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\customers;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $currentMonth = now()->format('Y-m');
        $month_order = '';
        // $month_order =  DB::table('orders')
        //     ->whereRaw('DATE_FORMAT(created_at, "%Y-%m") = ?', [$currentMonth])
        //     ->sum('total');

        if(Auth::user()->role == 1){
            $todayOrders = Order::whereDate('created_at', now()->toDateString())->count();
            $orders_list = Order::orderBy('id', 'DESC')->get();
            $total_orders = Order::count();
            $total_pending = Order::where('status', 0)->count();
            $total_processing = Order::where('status', 1)->count();
            $total_in_review = Order::where('status', 2)->count();
            $total_due_payment = Order::where('status', 3)->count();
            $total_refund_payment = Order::where('status', 4)->count();
            $total_completed = Order::where('status', 5)->count();
            $total_canceled = Order::where('status', 6)->count();
            $refund_payment = Order::where('status', 4)->get();
        }
        else{
            $todayOrders = Order::where('added_by', Auth::user()->id)->whereDate('created_at', now()->toDateString())->count();
            $orders_list = Order::where('added_by', Auth::user()->id)->orderBy('id', 'DESC')->get();
            $total_orders = Order::where('added_by', Auth::user()->id)->count();
            $total_pending = Order::where('added_by', Auth::user()->id)->where('status', 0)->count();
            $total_processing = Order::where('added_by', Auth::user()->id)->where('status', 1)->count();
            $total_in_review = Order::where('added_by', Auth::user()->id)->where('status', 2)->count();
            $total_due_payment = Order::where('added_by', Auth::user()->id)->where('status', 3)->count();
            $total_refund_payment = Order::where('added_by', Auth::user()->id)->where('status', 4)->count();
            $total_completed = Order::where('added_by', Auth::user()->id)->where('status', 5)->count();
            $total_canceled = Order::where('added_by', Auth::user()->id)->where('status', 6)->count();
            $refund_payment = Order::where('added_by', Auth::user()->id)->where('status', 4)->get();
        }
        $customers_count = customers::count();
        $product_id = Product::all();
        $products_count = Product::count();
        $users_count = User::count();

        return view('home', [
            'customers_count'=>$customers_count,
            'total_orders'=>$total_orders,
            'users_count'=>$users_count,
            'products_count'=>$products_count,
            'orders_list'=>$orders_list,
            'month_order'=>$month_order,
            'total_pending'=>$total_pending,
            'total_processing'=>$total_processing,
            'total_in_review'=>$total_in_review,
            'total_due_payment'=>$total_due_payment,
            'total_refund_payment'=>$total_refund_payment,
            'total_completed'=>$total_completed,
            'total_canceled'=>$total_canceled,
            'refund_payment'=>$refund_payment,
            'todayOrders'=>$todayOrders,
            'statusCounts' => [
                'pending' => $total_pending,
                'processing' => $total_processing,
                'in_review' => $total_in_review,
                'due_payment' => $total_due_payment,
                'refund_payment' => $total_refund_payment,
                'completed' => $total_completed,
                'canceled' => $total_canceled,
            ],
        ]);
    }
}
