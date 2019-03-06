@extends('public.layouts.public')
@section('title', 'Shop')
@extends('public.includes.bread')
@section('url', '/shop')
@section('page', 'Shop')
@section('content')
    <!--================Category Product Area =================-->
    <section class="cat_product_area section_gap">
        <div class="container-fluid">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="product_top_bar">
                        <div class="left_dorp"> <!--Keep this in a form-->
                            {{--<select class="sorting">--}}
                                {{--<option value="1">Popularity</option>--}}
                                {{--<option value="2">High to Low</option>--}}
                                {{--<option value="4">Low to High</option>--}}
                            {{--</select>--}}
                            {{--<button type="submit" value="submit" class="btn submit_btn">Sort</button>--}}

                        </div>


                        {{ $products->links() }}


                    </div>
                    <div class="latest_product_inner row">
                        @foreach($products as $product)


                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    @if($product->img1 == NULL)
                                        <img class="img-fluid" src="{{ asset('front/img/product/feature-product/f-p-1.jpg') }}" alt="">
                                    @else
                                        <img class="img-fluid" src="{{ Storage::url($product->img1) }}" alt="Product">
                                    @endif
                                    <div class="p_icon">
                                        <a href="#">
                                            <i class="lnr lnr-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="lnr lnr-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <a href="/product/{{ $product->slug }}">
                                    <h4>{{ $product->name }}</h4>
                                </a>
                                <h5>&#8377; {{ $product->new_price }}</h5>
                            </div>
                        </div>


                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets cat_widgets">
                            <div class="l_w_title">
                                <h3>Browse Categories</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                        @foreach($categories as $category)
                                        <li>
                                            <a href="/shopByCategory/{{ $category->category }}">{{ $category->category }}</a>
                                        </li>
                                        @endforeach
                                </ul>
                            </div>
                        </aside>
                        <!--<aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Product Filters</h3>
                            </div>
                            <div class="widgets_inner">
                                <h4>Brand</h4>
                                <ul class="list">
                                    <li>
                                        <a href="#">Apple</a>
                                    </li>
                                    <li>
                                        <a href="#">Asus</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">Gionee</a>
                                    </li>
                                    <li>
                                        <a href="#">Micromax</a>
                                    </li>
                                    <li>
                                        <a href="#">Samsung</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widgets_inner">
                                <h4>Color</h4>
                                <ul class="list">
                                    <li>
                                        <a href="#">Black</a>
                                    </li>
                                    <li>
                                        <a href="#">Black Leather</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">Black with red</a>
                                    </li>
                                    <li>
                                        <a href="#">Gold</a>
                                    </li>
                                    <li>
                                        <a href="#">Spacegrey</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widgets_inner">
                                <h4>Price</h4>
                                <div class="range_item">
                                    <div id="slider-range"></div>
                                    <div class="row m0">
                                        <label for="amount">Price : </label>
                                        <input type="text" id="amount" readonly>
                                    </div>
                                </div>
                            </div>
                        </aside>-->
                    </div>
                </div>
            </div>

            <div class="row">
                {{ $products->links() }}
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->
    @include('public.includes.subscription')

@endsection
