@extends('public.layouts.public')
@section('title', 'Home')
    @section('content')
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="overlay"></div>
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="banner_content row">
                        <div class="offset-lg-2 col-lg-8">
                            <h3>The Spring
                                <br /> Collection</h3>
                            <p>
                                This spring gift your loved ones the best that they deserve. Grab the Limited Edition Spring Gold Bridal collection now.
                            </p>
                            <a class="white_bg_btn" href="/contact">Get One Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hot Deals not needed
    <section class="hot_deals_area section_gap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="hot_deal_box">
                    <img class="img-fluid" src="img/product/hot_deals/deal1.jpg" alt="">
                    <div class="content">
                        <h2>20% off on Bridal Collection</h2>
                        <p>Buy Now</p>
                    </div>
                    <a class="hot_deal_link" href="category.html"></a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="hot_deal_box">
                    <img class="img-fluid" src="img/product/hot_deals/deal2.jpg" alt="">
                    <div class="content">
                        <h2>Best Deals of The Season</h2>
                        <p>Grab Now</p>
                    </div>
                    <a class="hot_deal_link" href="category.html"></a>
                </div>
            </div>
        </div>
    </div>
</section>-->
        <!-- Brands logo  area not needed
            <section class="clients_logo_area">
            <div class="container-fluid">
                <div class="clients_slider owl-carousel">
                    <div class="item">
                        <img src="img/clients-logo/c-logo-1.png" alt="">
                    </div>
                    <div class="item">
                        <img src="img/clients-logo/c-logo-2.png" alt="">
                    </div>
                    <div class="item">
                        <img src="img/clients-logo/c-logo-3.png" alt="">
                    </div>
                    <div class="item">
                        <img src="img/clients-logo/c-logo-4.png" alt="">
                    </div>
                    <div class="item">
                        <img src="img/clients-logo/c-logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </section>-->
        <!--Not neeeded in home page
        <section class="feature_product_area section_gap">
            <div class="main_box">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main_title">
                            <h2>Popular  Products</h2>
                            <p>These are our popular Products.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col1">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="img/product/feature-product/f-p-1.jpg" alt="">
                                    <div class="p_icon">
                                        <a href="">
                                            <i class="lnr lnr-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="lnr lnr-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <a href="single-product.html">
                                    <h4>Long Sleeve TShirt</h4>
                                </a>
                                <h5>&#8377;150.00</h5>
                            </div>
                        </div>
                        <div class="col col2">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="img/product/feature-product/f-p-2.jpg" alt="">
                                    <div class="p_icon">
                                        <a href="#">
                                            <i class="lnr lnr-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="lnr lnr-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <a href="single-product.html">
                                    <h4>Long Sleeve TShirt</h4>
                                </a>
                                <h5>&#8377;150.00</h5>
                            </div>
                        </div>
                        <div class="col col3">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="img/product/feature-product/f-p-3.jpg" alt="">
                                    <div class="p_icon">
                                        <a href="#">
                                            <i class="lnr lnr-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="lnr lnr-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <a href="single-product.html">
                                    <h4>Long Sleeve TShirt</h4>
                                </a>
                                <h5>&#8377;150.00</h5>
                            </div>
                        </div>
                        <div class="col col4">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="img/product/feature-product/f-p-4.jpg" alt="">
                                    <div class="p_icon">
                                        <a href="#">
                                            <i class="lnr lnr-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="lnr lnr-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <a href="single-product.html">
                                    <h4>Long Sleeve TShirt</h4>
                                </a>
                                <h5>&#8377;150.00</h5>
                            </div>
                        </div>
                        <div class="col col5">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="img/product/feature-product/f-p-5.jpg" alt="">
                                    <div class="p_icon">
                                        <a href="#">
                                            <i class="lnr lnr-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="lnr lnr-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <a href="single-product.html">
                                    <h4>Long Sleeve TShirt</h4>
                                </a>
                                <h5>&#8377;150.00</h5>
                            </div>
                        </div>

                        <div class="col col6">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="img/product/feature-product/f-p-5.jpg" alt="">
                                    <div class="p_icon">
                                        <a href="#">
                                            <i class="lnr lnr-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="lnr lnr-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <a href="single-product.html">
                                    <h4>Long Sleeve TShirt</h4>
                                </a>
                                <h5>&#8377;150.00</h5>
                            </div>
                        </div>

                        <div class="col col7">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="img/product/feature-product/f-p-4.jpg" alt="">
                                    <div class="p_icon">
                                        <a href="#">
                                            <i class="lnr lnr-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="lnr lnr-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <a href="single-product.html">
                                    <h4>Long Sleeve TShirt</h4>
                                </a>
                                <h5>&#8377;150.00</h5>
                            </div>
                        </div>

                        <div class="col col8">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="img/product/feature-product/f-p-5.jpg" alt="">
                                    <div class="p_icon">
                                        <a href="#">
                                            <i class="lnr lnr-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="lnr lnr-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <a href="single-product.html">
                                    <h4>Long Sleeve TShirt</h4>
                                </a>
                                <h5>&#8377;150.00</h5>
                            </div>
                        </div>
                        <div class="col col9">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="img/product/feature-product/f-p-1.jpg" alt="">
                                    <div class="p_icon">
                                        <a href="#">
                                            <i class="lnr lnr-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="lnr lnr-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <a href="single-product.html">
                                    <h4>Long Sleeve TShirt</h4>
                                </a>
                                <h5>&#8377;150.00</h5>
                            </div>
                        </div>
                        <div class="col col10">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="img/product/feature-product/f-p-4.jpg" alt="">
                                    <div class="p_icon">
                                        <a href="#">
                                            <i class="lnr lnr-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="lnr lnr-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <a href="single-product.html">
                                    <h4>Long Sleeve TShirt</h4>
                                </a>
                                <h5>&#8377;150.00</h5>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <nav class="cat_page mx-auto" aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">01</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">02</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">03</a>
                                </li>
                                <li class="page-item blank">
                                    <a class="page-link" href="#">...</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">09</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        @include('public.includes.subscription')
@endsection