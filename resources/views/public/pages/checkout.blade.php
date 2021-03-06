@extends('public.layouts.public')
@section('title', 'Check Out')
@extends('public.includes.bread')
@section('url', '/checkout')
@section('page', 'Check Out')
@section('content')
    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <!-- Not Needed
            <div class="returning_customer">
                <div class="check_title">
                    <h2>Returning Customer?
                        <a href="#">Click here to login</a>
                    </h2>
                </div>
                <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed
                    to the Billing & Shipping section.</p>
                <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                    <div class="col-md-6 form-group p_star">
                        <input type="text" class="form-control" id="name" name="name" value=" ">
                        <span class="placeholder" data-placeholder="Username or Email"></span>
                    </div>
                    <div class="col-md-6 form-group p_star">
                        <input type="password" class="form-control" id="password" name="password" value="">
                        <span class="placeholder" data-placeholder="Password"></span>
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option" name="selector">
                            <label for="f-option">Remember me</label>
                        </div>
                        <a class="lost_pass" href="#">Lost your password?</a>
                    </div>
                </form>
            </div>
            <div class="cupon_area">
                <div class="check_title">
                    <h2>Have a coupon?
                        <a href="#">Click here to enter your code</a>
                    </h2>
                </div>
                <input type="text" placeholder="Enter coupon code">
                <a class="tp_btn" href="#">Apply Coupon</a>
            </div>
        -->
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Customer Details</h3>
                        <form class="row contact_form" action="/addToOrder" method="post" novalidate="novalidate">
                            @csrf
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="first" name="fname" placeholder="First Name">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="last" name="lname" placeholder="Last Name">
                            </div>
                            <!--
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="company" name="company" placeholder="Company name">
                            </div>
                            -->
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="number" name="phone" placeholder="Phone">
                            </div>

                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            @php $price = 0; @endphp
                            <!--
                                <div class="col-md-12 form-group p_star">
                                <select class="country_select">
                                    <option value="1">Country</option>
                                    <option value="2">Country</option>
                                    <option value="4">Country</option>
                                </select>
                            </div>
                            -->
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="address" placeholder="Complete Address">
                            </div>
                            <!--
                                <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add2" name="add2">
                                <span class="placeholder" data-placeholder="Address line 02"></span>
                            </div>
                            -->
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="city" name="city" placeholder="Town/City">
                            </div>
                            <!--
                                <div class="col-md-12 form-group p_star">
                                <select class="country_select">
                                    <option value="1">District</option>
                                    <option value="2">District</option>
                                    <option value="4">District</option>
                                </select>
                            </div>
                            -->
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP">
                            </div>
                            <!--
                                <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector">
                                    <label for="f-option2">Create an account?</label>
                                </div>
                            </div>
                            -->

                            <!--<div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <h3>Shipping Details</h3>
                                    <input type="checkbox" id="f-option3" name="selector">
                                    <label for="f-option3">Ship to a different address?</label>
                                </div>
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Order Notes"></textarea>
                            </div>-->
                            <button type="submit" class="main_btn" style="margin: 5px;">Confirm Order</button>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order <span class="msg">(Not sent to Customer)</span></h2>
                            <ul class="list">
                                <li>
                                    <a href="#">Product
                                        <span>Total</span>
                                    </a>
                                </li>
                                @foreach($orders as $order)
                                    <li>
                                        <a href="/product/{{ DB::table('products')->where('id', $order->product)->first()->slug }}">{{ DB::table('products')->where('id', $order->product)->first()->name }}
                                            <span class="middle"> x {{ $order->quantity }}</span>
                                            <span class="last">&#8377;@php echo $pro_price = ($order->quantity * DB::table('products')->where('id', $order->product)->first()->new_price);  @endphp</span>
                                        </a>
                                    </li>
                                    @php $price = $price + $pro_price @endphp
                                @endforeach
                            </ul>
                            <ul class="list list_2">
                                {{--<li>--}}
                                    {{--<a href="#">Subtotal--}}
                                        {{--<span>&#8377;2160.00</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">Shipping--}}
                                        {{--<span>Flat rate: &#8377;50.00</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                <li>
                                    <a href="#">Total
                                        <span>&#8377;@php echo $price; @endphp</span>
                                    </a>
                                </li>
                            </ul>
                            <!--<div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="selector">
                                    <label for="f-option5">Check payments</label>
                                    <div class="check"></div>
                                </div>
                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                            </div>
                            <div class="payment_item active">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6" name="selector">
                                    <label for="f-option6">Paypal </label>
                                    <img src="img/product/single-product/card.jpg" alt="">
                                    <div class="check"></div>
                                </div>
                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                            </div>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector">
                                <label for="f-option4">I’ve read and accept the </label>
                                <a href="#">terms & conditions*</a>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->
    @include('public.includes.subscription')

@endsection
