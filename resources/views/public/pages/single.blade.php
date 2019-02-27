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
                        <div class="product_count">
                            <label for="qty">Quantity:</label>
                            <form action="/addToCart/{{ $product->id }}" method="POST">
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
                        </form>
                    </div>
                </div>
            </div>
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
                    <p>Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes and sizes
                        enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in Reading at the
                        age of 15, where she went to secretarial school and then into an insurance office. After moving to London and then
                        Hampton, she eventually married her next door neighbour from Reading, John Cook. He was an officer in the Merchant
                        Navy and after he left the sea in 1956, they bought a pub for a year before John took a job in Southern Rhodesia with
                        a motor company. Beryl bought their young son a box of watercolours, and when showing him how to use it, she decided
                        that she herself quite enjoyed painting. John subsequently bought her a child’s painting set for her birthday and it
                        was with this that she produced her first significant work, a half-length portrait of a dark-skinned lady with a vacant
                        expression and large drooping breasts. It was aptly named ‘Hangover’ by Beryl’s husband and</p>
                    <p>It is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing more and
                        more recipe books and Internet websites that are dedicated to the act of cooking for one. Divorce and the death of
                        spouses or grown children leaving for college are all reasons that someone accustomed to cooking for more than one
                        would suddenly need to learn how to adjust all the cooking practices utilized before into a streamlined plan of cooking
                        that is more efficient for one person creating less</p>
                </div>
                </div>
        </div>
    </section>
    <!--================End Product Description Area =================-->
    @include('public.includes.subscription')


@endsection
