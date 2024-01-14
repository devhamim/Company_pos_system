<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\courier;
use App\Models\city;
use App\Models\courierzone;
use App\Models\Product;
use App\Models\Billingdetails;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\customers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Str;

class OrderslistController extends Controller
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

    //orders_list
    function orders_list(){
        if(Auth::user()->role == 1){
            $order_id = Order::with('rel_to_billing')->orderBy('created_at', 'desc')->get();
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
            $order_id = Order::with('rel_to_billing')->where('added_by', Auth::user()->id)->orderBy('created_at', 'desc')->get();
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

        $couriers = courier::all();
        return view('backend.orders.orders_list', [
            'order_id'=>$order_id,
            'total_orders'=>$total_orders,
            'total_pending'=>$total_pending,
            'total_processing'=>$total_processing,
            'total_in_review'=>$total_in_review,
            'total_due_payment'=>$total_due_payment,
            'total_refund_payment'=>$total_refund_payment,
            'total_completed'=>$total_completed,
            'total_canceled'=>$total_canceled,
            'couriers'=>$couriers,
            'refund_payment'=>$refund_payment,
        ]);
    }

    //orders_list_status
    function orders_list_status($status){
        if(Auth::user()->role == 1){
            $order_id = Order::with('rel_to_billing')->orderBy('created_at', 'desc')->get();
            $order_status = Order::where('status', $status)->get();
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
            $order_id = Order::with('rel_to_billing')->where('added_by', Auth::user()->id)->orderBy('created_at', 'desc')->get();
            $order_status = Order::where('added_by', Auth::user()->id)->where('status', $status)->get();
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

        $couriers = courier::all();
        return view('backend.orders.orders_list_status', [
            'order_id'=>$order_id,
            'total_orders'=>$total_orders,
            'total_pending'=>$total_pending,
            'total_processing'=>$total_processing,
            'total_in_review'=>$total_in_review,
            'total_due_payment'=>$total_due_payment,
            'total_refund_payment'=>$total_refund_payment,
            'total_completed'=>$total_completed,
            'total_canceled'=>$total_canceled,
            'couriers'=>$couriers,
            'order_status'=>$order_status,
            'refund_payment'=>$refund_payment,
        ]);
    }


    // orders.courier.list
    function orders_courier_list(Request $request){
        if(Auth::user()->role == 1){
            $order_id = Order::where('lead_customer', $request->lead_customer)->with('rel_to_billing')->orderBy('created_at', 'desc')->get();
            $total_orders = Order::count();
            $total_pending = Order::where('status', 0)->count();
            $total_processing = Order::where('status', 1)->count();
            $total_in_review = Order::where('status', 2)->count();
            $total_due_payment = Order::where('status', 3)->count();
            $total_refund_payment = Order::where('status', 4)->count();
            $total_completed = Order::where('status', 5)->count();
            $total_canceled = Order::where('status', 6)->count();
            $refund_payment = Order::where('lead_customer', $request->lead_customer)->where('status', 4)->get();
        }
        else{
            $order_id = Order::where('added_by', Auth::user()->id)->where('lead_customer', $request->lead_customer)->with('rel_to_billing')->orderBy('created_at', 'desc')->get();
            $total_orders = Order::where('added_by', Auth::user()->id)->count();
            $total_pending = Order::where('added_by', Auth::user()->id)->where('status', 0)->count();
            $total_processing = Order::where('added_by', Auth::user()->id)->where('status', 1)->count();
            $total_in_review = Order::where('added_by', Auth::user()->id)->where('status', 2)->count();
            $total_due_payment = Order::where('added_by', Auth::user()->id)->where('status', 3)->count();
            $total_refund_payment = Order::where('added_by', Auth::user()->id)->where('status', 4)->count();
            $total_completed = Order::where('added_by', Auth::user()->id)->where('status', 5)->count();
            $total_canceled = Order::where('added_by', Auth::user()->id)->where('status', 6)->count();
            $refund_payment = Order::where('added_by', Auth::user()->id)->where('lead_customer', $request->lead_customer)->where('status', 4)->get();
        }

        $couriers = courier::all();
        return view('backend.orders.orders_couriers_list', [
            'order_id'=>$order_id,
            'total_orders'=>$total_orders,
            'total_pending'=>$total_pending,
            'total_processing'=>$total_processing,
            'total_in_review'=>$total_in_review,
            'total_due_payment'=>$total_due_payment,
            'total_refund_payment'=>$total_refund_payment,
            'total_completed'=>$total_completed,
            'total_canceled'=>$total_canceled,
            'couriers'=>$couriers,
            'refund_payment'=>$refund_payment,
        ]);
    }
    //orders_add
    function orders_add(){
        $order_id = Order::all();
        $couriers = courier::where('status', 1)->get();
        $products = Product::where('status', 1)->get();
        $customers = customers::all();
        return view('backend.orders.orders_add', [
            'couriers'=>$couriers,
            'products'=>$products,
            'order_id'=>$order_id,
            'customers'=>$customers,
        ]);
    }

    // orders_store
function orders_store(Request $request){
    $request->validate([
        'customer_name' => 'required',
        'customer_phone' => 'required|max:11',
        'busines_name' => 'required',
    ]);
    $order_id = 'INV'.'-'.rand(1000,9999);
    // Create an order
    $order = Order::create([
        'order_id' => $order_id,
        'added_by' => Auth::user()->id,
        'delivery_date' => $request->delivery_date,
        'invoice_id' => $request->invoice_id,
        'sub_total' => $request->sub_total,
        'discount' => $request->discount,
        'paid' => $request->paid,
        'due' => $request->due,
        'company_name' => $request->company_name,
        'lead_customer' => $request->lead_customer,
        'order_note' => $request->order_note,
        'created_at' => Carbon::now(),
    ]);

    // Create billing details
    Billingdetails::create([
        'order_id' => $order_id,
        'customer_name' => $request->input('customer_name'),
        'customer_phone' => $request->input('customer_phone'),
        'customer_address' => $request->input('customer_address'),
        'busines_name' => $request->input('busines_name'),
        'customer_email' => $request->input('customer_email'),
        'created_at' => Carbon::now(),
    ]);

    // Create billing details
    if($request->customer_id){
        customers::where('id', $request->customer_id)->update([
            'customer_name' => $request->input('customer_name'),
            'customer_phone' => $request->input('customer_phone'),
            'customer_address' => $request->input('customer_address'),
            'busines_name' => $request->input('busines_name'),
            'customer_email' => $request->input('customer_email'),
            'created_at' => Carbon::now(),
        ]);
    }
    else{
        customers::create([
            'added_by' => Auth::user()->id,
            'customer_name' => $request->input('customer_name'),
            'customer_phone' => $request->input('customer_phone'),
            'customer_address' => $request->input('customer_address'),
            'busines_name' => $request->input('busines_name'),
            'customer_email' => $request->input('customer_email'),
            'created_at' => Carbon::now(),
        ]);
    }

    // Insert order products
    $productIds = $request->product_id;
    $prices = $request->price;

    foreach ($request->quantity as $key => $quantity) {
        OrderProduct::create([
            'order_id' => $order_id,
            'product_id' => $productIds[$key],
            'quantity' => $quantity,
            'price' => $prices[$key],
        ]);
    }
    return back()->withSuccess('Order add successfully');
}


    public function getCities(Request $request)
{
    $courierId = $request->input('id');
    if (!$courierId) {
        return response()->json(['error' => 'No courier ID provided.']);
    }

    $cities = City::where('status', 1)->where('courier_id', $courierId)->pluck('name', 'id');

    $charge = courier::where('id', $courierId)->value('charge');

    return response()->json(['cities' => $cities, 'charge' => $charge]);
}

    function getzone(Request $request){
        $zones = courierzone::where('status', 1)->where('city_id', $request->id)->pluck('zone', 'id');

        return response()->json($zones);
    }

    // getproduct
    public function getProduct(Request $request){
    $productId = $request->input('id');
    if (!$productId) {
        return response()->json(['error' => 'No product ID provided.']);
    }
    $product = Product::find($productId);

    if (!$product) {
        return response()->json(['error' => 'Product not found.']);
    }
    $data = [
        'product_id' => $product->id,
        'sku' => $product->sku,
        'productName' => $product->product_name,
        'product_price' => $product->product_discount,
        'quantity' => $product->quantity,
        'sub_total' => $product->product_price*$product->quantity,
    ];

    return response()->json($data);
}



    // getcustomerdata
    public function getcustomerdata($customerid)
    {
        $customer = customers::find($customerid);

        return response()->json([
            'name' => $customer->customer_name,
            'phone' => $customer->customer_phone,
            'busines' => $customer->busines_name,
            'email' => $customer->customer_email,
            'address' => $customer->customer_address,
        ]);
    }


    // getProductupdate
    public function getProductupdate(Request $request){
    $productId = $request->input('id');
    if (!$productId) {
        return response()->json(['error' => 'No product ID provided.']);
    }
    $product = Product::find($productId);

    if (!$product) {
        return response()->json(['error' => 'Product not found.']);
    }
    $data = [
        'product_id' => $product->id,
        'sku' => $product->sku,
        'productName' => $product->product_name,
        'product_price' => $product->product_discount,
        'sub_total' => $product->product_price*$product->quantity,
    ];

    return response()->json($data);
}



// orders_update
function orders_edit($order_id){
    $orders = Order::where('order_id',$order_id)->first();
    $orderproducts = OrderProduct::where('order_id',$order_id)->first();
    $orderproduct = OrderProduct::where('order_id',$order_id)->get();
    $billingdetails = Billingdetails::where('order_id',$order_id)->first();
    $couriers = courier::all();
    $products = Product::all();
    return view('backend.orders.orders_edit', [
        'orders' => $orders,
        'billingdetails' => $billingdetails,
        'orderproducts' => $orderproducts,
        'couriers' => $couriers,
        'products' => $products,
        'orderproduct' => $orderproduct,
    ]);
}

public function orders_update(Request $request)
{
    $request->validate([
        'customer_name' => 'required',
        'customer_phone' => 'required|max:11',
        'busines_name' => 'required',
    ]);

    // If you have an existing order_id, retrieve the order
    $order_id = $request->input('order_id') ?: 'INV' . '-' . rand(1000, 9999);
    $order = Order::where('order_id', $order_id)->first();

    Order::where('order_id',$order_id)->update([
        'delivery_date' => $request->delivery_date,
        'invoice_id' => $request->invoice_id,
        'sub_total' => $request->sub_total,
        'discount' => $request->discount,
        'paid' => $request->paid,
        'due' => $request->due,
        'company_name' => $request->company_name,
        'lead_customer' => $request->lead_customer,
        'order_note' => $request->order_note,
        'status' => $request->status,
        'updated_at' => Carbon::now(),
    ]);


    // Create or update billing details
    Billingdetails::where('order_id',$order_id)->update([
        'customer_name' => $request->input('customer_name'),
        'customer_phone' => $request->input('customer_phone'),
        'customer_address' => $request->input('customer_address'),
        'busines_name' => $request->input('busines_name'),
        'customer_email' => $request->input('customer_email'),
            'updated_at' => Carbon::now(),
        ]
    );
    if (!empty($request->product_id)) {
        foreach ($request->product_id as $key => $productId) {
            OrderProduct::updateOrCreate(
                [
                    'order_id' => $order_id,
                    'product_id' => $productId,
                ],
                [
                    'quantity' => $request->quantity[$key],
                    'price' => $request->price[$key],
                    'updated_at' => now(),
                ]
            );
        }
    }

    return redirect()->route('orders.list')->withSuccess('Order updated successfully');
}

function orders_delete($id){

    Order::find($id)->delete();
    return back()->withError('Order Delete Successfully');
}

function orders_product_delete($id){
    OrderProduct::find($id)->delete();
    return back()->withError('Order Delete Successfully');
}

function orders_exportOrdersReport(){

    $rules = [
        'start_date' => '',
        'end_date' => '',
    ];

    $validatedData = $request->validate($rules);

    $sDate = $validatedData['start_date'];
    $eDate = $validatedData['end_date'];


    $purchases = DB::table('billingdetails')
            ->join('products', 'purchase_details.product_id', '=', 'products.id')
            ->join('purchases', 'purchase_details.purchase_id', '=', 'purchases.id')
            ->whereBetween('purchases.purchase_date',[$sDate,$eDate])
            ->where('purchases.purchase_status','1')
            ->select( 'purchases.purchase_no', 'purchases.purchase_date', 'purchases.supplier_id','products.product_code', 'products.product_name', 'purchase_details.quantity', 'purchase_details.unitcost', 'purchase_details.total')
            ->get();


        $purchase_array [] = array(
            'Date',
            'No Purchase',
            'Supplier',
            'Product Code',
            'Product',
            'Quantity',
            'Unitcost',
            'Total',
        );

        foreach($purchases as $purchase)
        {
            $purchase_array[] = array(
                'Date' => $purchase->purchase_date,
                'No Purchase' => $purchase->purchase_no,
                'Supplier' => $purchase->supplier_id,
                'Product Code' => $purchase->product_code,
                'Product' => $purchase->product_name,
                'Quantity' => $purchase->quantity,
                'Unitcost' => $purchase->unitcost,
                'Total' => $purchase->total,
            );
        }

        $this->exportExcel($purchase_array);
}

}
