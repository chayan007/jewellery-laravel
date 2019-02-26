@extends('public.layouts.public')
@section('title', 'Order Details')
@include('public.includes.bread')
@section('url', '/orderDetails')
@section('page', 'Order Details')
@section('content')
    <!--================Order Details Area =================-->
    <section class="order_details p_120">
        <div class="container">
            <!--
                <h3 class="title_confirmation">Thank you. Your order has been received.</h3>

            -->
            <div class="row order_d_inner">
                <div class="col-md-6">
                    <div class="details_item">
                        <h4>Order Info</h4>
                        <ul class="list">
                            <li>
                                <a href="#">
                                    <span>Order number</span> : 60235</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Order Date</span> : 20-02-2019</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Total</span> : INR 2210</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Status</span> : Dispatched</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Estimated Delivery</span> : Within 5Days</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="details_item">
                        <h4>Billing Address</h4>
                        <ul class="list">
                            <li>
                                <a href="#">
                                    <span>Name</span> : John Doe</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Email</span> : hifad@example.com</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Phone No.</span> : 9564681883</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>City</span> : Los Angeles</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Address</span> : 24, PR Apartmenta, Boy Gully</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Postcode </span> : 568453</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--not needed
                <div class="col-md-6">
                    <div class="details_item">
                        <h4>Shipping Address</h4>
                        <ul class="list">
                                <li>
                                        <a href="#">
                                            <span>Name</span> : John Doe</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>City</span> : Los Angeles</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Address</span> : 24, PR Apartmenta, Boy Gully</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Postcode </span> : 568453</a>
                                    </li>
                        </ul>
                    </div>
                </div>-->
            </div>
            <div class="order_details_table">
                <h2>Order Items Details</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <p>Pixelstore fresh Blackberry</p>
                            </td>
                            <td>
                                <h5>x 02</h5>
                            </td>
                            <td>
                                <p>&#8377;720.00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Pixelstore fresh Blackberry</p>
                            </td>
                            <td>
                                <h5>x 02</h5>
                            </td>
                            <td>
                                <p>&#8377;720.00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Pixelstore fresh Blackberry</p>
                            </td>
                            <td>
                                <h5>x 02</h5>
                            </td>
                            <td>
                                <p>&#8377;720.00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Subtotal</h4>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                                <p>&#8377;2160.00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Shipping</h4>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                                <p>Flat rate: &#8377;50.00</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Total</h4>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                                <p>&#8377;2210.00</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Order Details Area =================-->
@endsection
@include('public.includes.subscription')
