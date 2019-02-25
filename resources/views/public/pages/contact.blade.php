@extends('public.layouts.public')
@section('js')
    <!-- contact js -->
    <script src="{{ asset('front/js/jquery.form.js') }}"></script>
    <script src="{{ asset('front/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('front/js/contact.js') }}"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ asset('front/js/gmaps.min.js') }}"></script>
    <script src="{{ asset('front/js/theme.js') }}"></script>
@endsection
@section('title', 'Contact Us')
    @section('url', '/contact')
        @section('page', 'Contact')
            @include('public.includes.bread')
            @section('content')
                <!--================Contact Area =================-->
                <section class="contact_area p_120">
                    <div class="container">
                        <div id="mapBox" class="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="13" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                             data-mlat="40.701083" data-mlon="-74.1522848">
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="contact_info">
                                    <div class="info_item">
                                        <i class="lnr lnr-home"></i>
                                        <h6>Enter Your Location Here</h6>
                                        <p>ZIp Code Here</p>
                                    </div>
                                    <div class="info_item">
                                        <i class="lnr lnr-phone-handset"></i>
                                        <h6>
                                            <a href="#">00 (440) 9865 562</a>
                                        </h6>
                                        <p>Mon to Fri 9am to 6 pm</p>
                                    </div>
                                    <div class="info_item">
                                        <i class="lnr lnr-envelope"></i>
                                        <h6>
                                            <a href="#">support@theantiqueshop.com</a>
                                        </h6>
                                        <p>Send us your query anytime!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <form class="row contact_form" action="/contact" method="post" id="contactForm" novalidate="novalidate">
                                    @csrf
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!--================Contact Area =================-->
            @endsection