@extends('public.layouts.public')
@section('title', 'Orders')
@extends('public.includes.bread')
@section('url', '/orders')
@section('page', 'Orders')
@section('content')
    <!--================Order Area =================-->
    <section class="order_area">
        <div class="container">
            <div class="order_list">
                <div class="row">

                    @foreach($orders as $order)
                        <div class="col-lg-6 col-md-12">
                            <a href="#" class="each_order">
                                <div class="row">
                                    <div class="order_child_left col-8">
                                        <span>Order No.</span>
                                        <h4>{{ $order->token }}</h4>
                                    </div>
                                    <div class="order_child_right col-4">
                                        <span>Order Date:</span>
                                        <h4>{{ \Carbon\Carbon::parse($order->created_at)->toFormattedDateString()  }}</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="order_child_left col-8">
                                        <span>Customer Name</span>
                                        <h4>{{ DB::table('customers')->where('id', $order->customer)->first()->name }}</h4>
                                    </div>
                                    <div class="order_child_right col-4">
                                        <span>Order Status: </span>
                                        <h4>{{ $order->status }}</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="order_child_left col-8">
                                        <ol class="order-items">
                                            <li>
                                                <h5>{{ DB::table('products')->where('id', $order->product)->first()->name }}</h5>
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="order_child_right col-4">
                                        <span>Total Amount</span>
                                        <h4>&#8377 @php echo $pro_price = ($order->quantity * DB::table('products')->where('id', $order->product)->first()->new_price);  @endphp</h4>
                                    </div>
                                </div>
                            </a>

                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </section>
    <!--================End Order Area =================-->
    @include('public.includes.subscription')

@endsection
