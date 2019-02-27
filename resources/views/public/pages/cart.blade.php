@extends('public.layouts.public')
@section('title', 'Cart')
@extends('public.includes.bread')
@section('url', '/cart')
@section('page', 'Cart')
@section('content')

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            @if(session('status'))
                <div class="alert alert-success" role="alert">
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif
            @php $price = 0; @endphp
                <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="{{ asset('front/img/product/single-product/cart-1.jpg') }}" alt="Product Image">
                                        </div>
                                        <div class="media-body">
                                            <p>{{ DB::table('products')->where('id', $order->product)->first()->name }} </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>&#8377;@php echo ( DB::table('products')->where('id', $order->product)->first()->new_price);  @endphp</h5>
                                </td>
                                <td>
                                    <form action="/updateCart/{{ $order->id }}" method="POST">
                                    <div class="product_count">                                         @csrf
                                        <input type="text" name="quantity" id="sst" maxlength="12" value="{{ $order->quantity }}" title="Quantity:" class="input-text qty">
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                                class="increase items-count" type="button">
                                            <i class="lnr lnr-chevron-up"></i>
                                        </button>
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) && sst > 0 ) result.value--;return false;"
                                                class="reduced items-count" type="button">
                                            <i class="lnr lnr-chevron-down"></i>
                                        </button>
                                    </div>
                                </td>
                                <td>
                                    <h5>&#8377;@php echo $pro_price = ($order->quantity * DB::table('products')->where('id', $order->product)->first()->new_price);  @endphp</h5>
                                </td>
                            </tr>
                            <tr class="bottom_button">
                                <td>
                                    <button type="submit" class="gray_btn">Update</button>
                                </td>
                                </form>
                                @php $price = $price + $pro_price @endphp
                                <!-- Not Needed
                                <td>
                                    <div class="cupon_text">
                                            <input type="text" placeholder="Coupon Code">
                                            <a class="main_btn" href="#">Apply</a>
                                            <a class="gray_btn" href="#">Close Coupon</a>
                                        </div>
                                </td>-->
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>

                            </tr>
                        @endforeach
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td>
                                <h5>&#8377;@php echo $price; @endphp</h5>
                            </td>
                        </tr>
                        <!--  Not Needed
                        <tr class="shipping_area">
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <h5>Shipping</h5>
                            </td>
                            <td>
                                <div class="shipping_box">
                                    <ul class="list">
                                        <li>
                                            <a href="#">Flat Rate: &#8377;5.00</a>
                                        </li>
                                        <li>
                                            <a href="#">Free Shipping</a>
                                        </li>
                                        <li>
                                            <a href="#">Flat Rate: &#8377;10.00</a>
                                        </li>
                                        <li class="active">
                                            <a href="#">Local Delivery: &#8377;2.00</a>
                                        </li>
                                    </ul>
                                    <h6>Calculate Shipping
                                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </h6>
                                    <select class="shipping_select">
                                        <option value="1">Bangladesh</option>
                                        <option value="2">India</option>
                                        <option value="4">Pakistan</option>
                                    </select>
                                    <select class="shipping_select">
                                        <option value="1">Select a State</option>
                                        <option value="2">Select a State</option>
                                        <option value="4">Select a State</option>
                                    </select>
                                    <input type="text" placeholder="Postcode/Zipcode">
                                    <a class="gray_btn" href="#">Update Details</a>
                                </div>
                            </td>
                        </tr>-->
                        <tr class="out_button_area">

                            <td>
                                <div class="checkout_btn_inner">
                                    <a class="gray_btn" href="/shop">Continue Shopping</a>
                                    <a class="main_btn" href="/checkout">Proceed to checkout</a>
                                </div>
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->
    @include('public.includes.subscription')

@endsection
