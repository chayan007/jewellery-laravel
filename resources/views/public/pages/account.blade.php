@extends('public.layouts.public')
@section('title', 'Account')
@include('public.includes.bread')
@section('url', '/account')
@section('page', 'Account')
@section('content')

    <!--================Account Area =================-->
    <section class="account_area">
        <div class="container">
            <div class="account_details">
                <h3 class="account_header">Account Details</h3>
                <div class="detail_col">
                    <div class="agent-name">

                        <span>Name:</span>	<h3>John Lovasky</h3>
                    </div>
                    <div class="referrel-code">
                        <span>Agent Id:</span>
                        <h3>
                            204511
                        </h3>
                    </div>
                    <a class="genric-btn danger radius" href="/deleteAccount">Delete Account</a>
                </div>
            </div>
        </div>
    </section>
    <!--================End Account Area =================-->
@endsection
@include('public.includes.subscription')
