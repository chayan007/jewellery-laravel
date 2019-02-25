@extends('public.layouts.public')
@section('title', 'Register')
@section('url', '/register')
@section('page', 'Register')
@include('public.includes.bread')
@section('content')
    <!--================Login Box Area =================-->
    <section class="login_box_area p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="{{ asset('front/img/login.jpg') }}" alt="">
                        <div class="hover">
                            <h4>Already Registered</h4>
                            <p>Login here</p>
                            <a class="main_btn" href="/login">Goto Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner reg_form">
                        <h3>Create an Account</h3>
                        <form class="row login_form" action="/register" method="post" id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="pass" name="password_confirmation" placeholder="Confirm password">
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector">
                                    <label for="f-option2">Keep me logged in</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="btn submit_btn">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Login Box Area =================-->
@endsection
