@extends('layouts.dashboard')
@section('content')
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper" style="padding-right: 20px">
        <div class="dashboard-ecommerce">
            <div class=" dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">All Orders</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a
                                                href="{{ url('/') }}"
                                                class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">All Orders</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-2 col-2">
                        <a href="{{ route('orders.add') }}"
                           class="btn btn-success btn-sm">Add Order</a>
                    </div>
                    <div class="col-md-2 col-2 text-end">
                            <form action="{{ route('multi.view.invoice') }}" method="post" id="all_print_form">
                                @csrf

                                <input type="hidden" name="print_data" id="checked_value">
                                <div class="form-group">
                                    <button type="submit" id="bulk_print_btn" class="btn btn-info btn-sm">Print Invoice</button>
                                </div>
                            </form>
                    </div>

                    <div class="col-md-4 col-4">

                        <form action="{{ route('excel.exportOrdersReport') }}" method="post" id="all_courier_csv">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="status" id="courier_status">
                                <input type="hidden" id="all_ord_id" name="all_ord_id">
                                <button type="submit" id="steadfast_csv" class="btn btn-success btn-sm">Stead Fast
                                    Export
                                </button>
                                <button type="submit" id="redex_csv" class="btn btn-danger btn-sm">Redex Export
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-4 mt-md-0 mt-2">
                        <form action="{{ route('orders.courier.list') }}" method="get" class="form-inline float-md-right">
                            <div class="form-group">
                                <input type="hidden" name="status" value="">
                                <select name="lead_customer" id="lead_customer" class="form-control mr-2">
                                    <option value="">Select Social</option>
                                        @foreach ($couriers as $courier)
                                            <option value="{{ $courier->id }}">{{ $courier->name }}</option>
                                        @endforeach
                                </select>
                                <button class="btn btn-success">Search</button>
                                <a href="{{ route('orders.list') }}" class="btn btn-secondary mx-2">Reset</a>
                            </div>
                        </form>
                    </div>

                </div>

                <div class="row mb-md-4 mb-3">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6 mb-md-4 mb-3">
                        <a href="{{ route('orders.list') }}">
                            <div class="card border-3 border-top border-top-success">
                                <div class="card-body">
                                    <h5>Total Order</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">{{ $total_orders }}</h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6 mb-md-4 mb-3">
                        <a href="{{ route('orders.list.status', 0) }}">
                            <div class="card border-3 border-top border-top-success">
                                <div class="card-body">
                                    <h5 class="text-info">Total Pending</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">{{ $total_pending }}</h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6 mb-md-4 mb-3">
                        <a href="{{ route('orders.list.status', 1) }}">
                            <div class="card border-3 border-top border-top-success">
                                <div class="card-body">
                                    <h5 class="text-secondary">Total Processing</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">{{ $total_processing }}</h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6 mb-md-4 mb-3">
                        <a href="{{ route('orders.list.status', 2) }}">
                            <div class="card border-3 border-top border-top-success">
                                <div class="card-body">
                                    <h5 class="text-warning">Total On Going</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">{{ $total_in_review }}</h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6 mb-md-4 mb-3">
                        <a href="{{ route('orders.list.status', 3) }}">
                            <div class="card border-3 border-top border-top-success">
                                <div class="card-body">
                                    <h5 class="text-danger">Total Due Payment</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">{{ $total_due_payment }}</h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6 mb-md-4 mb-3">
                        <a href="{{ route('orders.list.status', 4) }}">
                            <div class="card border-3 border-top border-top-success">
                                <div class="card-body">
                                    <h5 class="text-success">Total Refund payment</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">{{ $total_refund_payment }}</h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6 mb-md-4 mb-3">
                        <a href="{{ route('orders.list.status', 5) }}">
                            <div class="card border-3 border-top border-top-success">
                                <div class="card-body">
                                    <h5 class="text-success">Total Completed</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">{{ $total_completed }}</h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6 mb-md-4 mb-3">
                        <a href="{{ route('orders.list.status', 6) }}">
                            <div class="card border-3 border-top border-top-success">
                                <div class="card-body">
                                    <h5 class="text-success">Total Canceled</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">{{ $total_canceled }}</h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @php
                        $total_amount = 0;
                        $total_payment = 0;
                        $total_due = 0;
                        $total_refund = 0;
                        $total_blance = 0;
                        $total_commission = 0;
                        foreach ($order_id as $order) {
                            $total_amount += $order->sub_total-$order->discount;
                            $total_payment += $order->paid;
                            $total_due += $order->due;
                        }
                        foreach ($refund_payment as $refund) {
                            $total_refund += $refund->paid;
                        }
                        $total_blance = $total_payment-$total_refund;
                        $total_commission = $total_blance*5/100;
                    @endphp
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6 mb-md-4 mb-3">
                        <div class="card border-3 border-top border-top-success">
                            <div class="card-body">
                                <h5 class="text-success">Total Amount</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">৳{{ $total_amount }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6 mb-md-4 mb-3">
                        <div class="card border-3 border-top border-top-success">
                            <div class="card-body">
                                <h5 class="text-success">Total Payment</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">৳{{ $total_payment }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6 mb-md-4 mb-3">
                        <div class="card border-3 border-top border-top-success">
                            <div class="card-body">
                                <h5 class="text-success">Total Due</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">৳{{ $total_due }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6 mb-md-4 mb-3">
                        <div class="card border-3 border-top border-top-success">
                            <div class="card-body">
                                <h5 class="text-success">Total Refund Payment</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">৳{{ $total_refund }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6 mb-md-4 mb-3">
                        <div class="card border-3 border-top border-top-success">
                            <div class="card-body">
                                <h5 class="text-success">Total Blance</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">৳{{ $total_blance }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6 mb-md-4 mb-3">
                        <div class="card border-3 border-top border-top-success">
                            <div class="card-body">
                                <h5 class="text-success">Total Commission</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">৳{{ $total_commission }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="row mb-2">
                        {{-- <div class="col-md-2 col-12">
                            <form action="https://ecom.prodevsltd.com/admin-orders/all-status" method="post" id="all_status_form">
                                <input type="hidden" name="_token" value="ktLkxYSgW2CFqo1LaSSBAFMYLYEfg60BNopr8gRu">                                <input type="hidden" id="all_status" name="all_status">
                                <select name="status" id="status" class="form-control">
                                    <option value="">Select Status</option>
                                    <option value="0">On Hold</option>
                                    <option value="2">Processing</option>
                                    <option value="3">Pending Payment</option>
                                    <option value="1">Delivered</option>
                                    <option value="4">Canceled</option>
                                </select>
                            </form>
                        </div> --}}


                    </div>
                   <div class="row">
                    <div class="col-12">
                        <div class="card ">
                            <div class="card-body table-responsive">
                                <table id="report-table" class="table table-bordered table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>SL.</th>
                                            <th>Invoice ID</th>
                                            <th>Customer Info</th>
                                            <th>Products</th>
                                            <th>Total</th>
                                            <th>Paid</th>
                                            <th>Due</th>
                                            <th>Addad By</th>
                                            <th>Company</th>
                                            <th>D. Date</th>
                                            <th>Status</th>
                                            <th>Note</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order_id as $sl=>$order)
                                        <tr id="tr_{{ $order->id }}">
                                            <td>
                                                <input type="checkbox" name="checkbox" class="sub_chk" data-id="{{ $order->id }}">
                                            </td>
                                            <td>{{ $sl+1 }}</td>
                                            <td>{{ $order->order_id }}</td>
                                            <td>
                                                <span> {{ $order->rel_to_billing ? $order->rel_to_billing->customer_name : 'No Billing Details' }}</span> <br>
                                                <a href="tel: {{ $order->rel_to_billing ? $order->rel_to_billing->customer_phone : 'No Billing Details' }}"><span>{{ $order->rel_to_billing ? $order->rel_to_billing->customer_phone : 'No Billing Details' }}</span></a>
                                                <br>
                                                <span>{{ $order->rel_to_billing ? $order->rel_to_billing->customer_address : 'No Billing Details' }}</span>
                                                <br>

                                            </td>
                                            <td>
                                                @foreach ($order->rel_to_orderpro as $OrderProduct)
                                                    {{ $OrderProduct->quantity }} x {{ $OrderProduct->rel_to_product->product_name }} <br>
                                                @endforeach
                                            </td>
                                            <td>৳ {{ $order->sub_total }}</td>
                                            <td>৳ {{ $order->paid }}</td>
                                            <td>৳ {{ $order->due }}</td>
                                            <td>
                                                @if ($order->rel_to_user != null)
                                                    {{ $order->rel_to_user->name }}
                                                @else
                                                    Null
                                                @endif
                                            </td>
                                            <td>{{ $order->company_name }}</td>
                                            <td>{{$order->delivery_date}}
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown mx-1">
                                                        @if ($order->status == 0)
                                                            <div class="badge badge-info">Pending</div>
                                                        @elseif ($order->status == 1)
                                                            <div class="badge badge-primary">Processing</div>
                                                        @elseif ($order->status == 2)
                                                            <div class="badge badge-success">On Going</div>
                                                        @elseif ($order->status == 3)
                                                            <div class="badge badge-warning">Due Payment</div>
                                                        @elseif ($order->status == 4)
                                                            <div class="badge badge-default">Refund payment</div>
                                                        @elseif ($order->status == 5)
                                                            <div class="badge badge-dark">Completed</div>
                                                        @else
                                                            <div class="badge badge-danger">Canceled</div>
                                                        @endif
                                                </div>
                                            </td>
                                            <td>{{ $order->order_note }}</td>
                                            {{-- <td>Mr. Employee</td> --}}

                                            <td class="text-center">
                                                {{-- <a href="{{ route('invoice.download', $order->id) }}" class="d-block mb-1 print" data-id="12"><i class="fa fa-print"></i></a> --}}

                                                <a href="{{ route('view.invoice', $order->order_id) }}" class="d-block mb-1 print" data-id="{{ $order->id }}"><i class="fa fa-print"></i></a>

                                                <a href="{{ route('orders.edit', $order->order_id) }}" class="d-block mb-1">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ route('orders.delete', $order->id) }}" class="d-block mb-1" onclick="return confirm('Are you sure to delete this?')">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="mt-3">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        //check value
        var checkboxes = document.querySelectorAll('.sub_chk');
        //passing data to input
        let checked_value = document.getElementById('checked_value');

        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                var checkedIDs = [];
                var checkedCheckboxes = document.querySelectorAll('.sub_chk:checked');

                checkedCheckboxes.forEach(function(checkedCheckbox) {
                    checkedIDs.push(checkedCheckbox.getAttribute('data-id'));
                });

                checked_value.value = checkedIDs.join(', ');
                // console.log(checkedIDs); // Display the array of checked IDs in the console
                // You can perform further actions with the checkedIDs array here
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        //check value
        var checkboxes = document.querySelectorAll('.sub_chk');
        //passing data to input
        let checked_value = document.getElementById('all_ord_id');

        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                var checkedIDs = [];
                var checkedCheckboxes = document.querySelectorAll('.sub_chk:checked');

                checkedCheckboxes.forEach(function(checkedCheckbox) {
                    checkedIDs.push(checkedCheckbox.getAttribute('data-id'));
                });

                checked_value.value = checkedIDs.join(', ');
                // console.log(checkedIDs); // Display the array of checked IDs in the console
                // You can perform further actions with the checkedIDs array here
            });
        });
    });
</script>
<script>
    $('.print').on('click', function () {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN
            }
        });

        $.ajax({
            url: '/getprints',
            type: 'POST',
            data: {_token: CSRF_TOKEN, id: $(this).data('id')},
            success: function (data) {
                newWin = window.open("");
                newWin.document.write(data);
                newWin.document.close();
            }
        });
    });
</script>

<script>
    //courier export
    $('#steadfast_csv').on('click', function (e) {
        var allVals = [];
        $(".sub_chk:checked").each(function () {
            allVals.push($(this).attr('data-id'));
        });

        if (allVals.length <= 0) {
            alert("Please select row.");
        } else {
            $('#all_ord_id').val(allVals);
            $('#courier_status').val(1);
            $('#all_courier_csv').submit();
        }
    });

    $('#redex_csv').on('click', function (e) {
        var allVals = [];
        $(".sub_chk:checked").each(function () {
            allVals.push($(this).attr('data-id'));
        });

        if (allVals.length <= 0) {
            alert("Please select row.");
        } else {
            $('#all_ord_id').val(allVals);
            $('#courier_status').val(2);
            $('#all_courier_csv').submit();
        }
    });
</script>
