@extends('public.layouts.public')
@section('title', $product->name)
@extends('public.includes.bread')
@section('url', '/product/'.$product->slug)
@section('page', $product->name)
@section('content')
    <!--================Single Product Area =================-->
    <div class="product_image_area">
        <div class="container">
            @if(session('status'))
                <div class="alert alert-success" role="alert">
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif
                <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div class="s_product_img">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                    <img src="{{ Storage::url($product->img1) }}" alt="">
                                </li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                    <img src="{{ Storage::url($product->img2) }}" alt="">
                                </li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                    <img src="{{ Storage::url($product->img3) }}" alt="">
                                </li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ Storage::url($product->img1) }}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ Storage::url($product->img2) }}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ Storage::url($product->img3) }}" alt="Third slide">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h3>{{ $product->name }}</h3>
                        <h2>&#8377;{{ $product->new_price }}</h2>
                        <ul class="list">
                            <li>
                                <a class="active" href="#">
                                    <span>Category</span> : {{ DB::table('categories')->where('id', $product->category)->first()->category }}</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Availibility</span> : In Stock</a>
                            </li>
                        </ul>
                        <p> &nbsp; </p>
                        <form action="/addToCart/{{ $product->id }}" method="POST">
                        <div class="product_count">
                            <label for="qty">Quantity:</label>
                                @csrf
                             <input type="text" name="quantity" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                            <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                    class="increase items-count" type="button">
                                <i class="lnr lnr-chevron-up"></i>
                            </button>
                            <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) && sst > 0 ) result.value--;return false;"
                                    class="reduced items-count" type="button">
                                <i class="lnr lnr-chevron-down"></i>
                            </button>
                        </div>
                        <div class="card_area">
                            <button class="main_btn" type="submit">Add to Cart</button>
                            {{--Convert it to submit button--}}
                        </div>
                    </div>
                </div>
            </div>
                </form>
        </div>
    </div>
    <!--================End Single Product Area =================-->

    <!--================Product Description Area =================-->
    <section class="product_description_area">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <p> {{ $product->desc }}</p>
                </div>
                </div>
        </div>
    </section>
    <!--================End Product Description Area =================-->
    @include('public.includes.subscription')


@endsection
