@extends('public.layouts.public')
@section('title', 'Orders')
@include('public.includes.bread')
@section('url', '/orders')
@section('page', 'Orders')
@section('content')
    <!--================Order Area =================-->
    <section class="order_area">
        <div class="container">
            <div class="order_list">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <a href="/orderDetails" class="each_order">
                            <div class="row">
                                <div class="order_child_left col-8">
                                    <span>Order No.</span>
                                    <h4>52435</h4>
                                </div>
                                <div class="order_child_right col-4">
                                    <span>Order Date:</span>
                                    <h4>23/03/19</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="order_child_left col-8">
                                    <span>Customer Name</span>
                                    <h4>John Doe</h4>
                                </div>
                                <div class="order_child_right col-4">
                                    <span>Order Status: </span>
                                    <h4>Dispatched</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="order_child_left col-8">
                                    <ol class="order-items">
                                        <li>
                                            <h5>Item nuumber 12</h5>
                                        </li>
                                        <li>
                                            <h5>Item nuumber 12?Lets pretend the full name is very nig</h5>
                                        </li>
                                        <li>
                                            <h5>Gold Plated ring which doe not exist</h5>

                                        </li>
                                    </ol>
                                </div>
                                <div class="order_child_right col-4">
                                    <span>Total Amount</span>
                                    <h4>&#8377 1500</h4>
                                </div>
                            </div>
                        </a>

                    </div>


                </div>

            </div>
        </div>
    </section>
    <!--================End Order Area =================-->
@endsection
@include('public.includes.subscription')
