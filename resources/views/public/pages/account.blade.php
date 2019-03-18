@extends('public.layouts.public')
@section('title', 'Account')
@extends('public.includes.bread')
@section('url', '/home')
@section('page', 'Account')
@section('content')

    <!--================Account Area =================-->
    <section class="account_area">
        <div class="container">
            <div class="account_details">
                <h3 class="account_header">Account Details</h3>
                <div class="detail_col">
                    <div class="agent-name">

                        <span>Name:</span>	<h3>{{ Auth::user()->name }}</h3>
                    </div>
                    <div class="referrel-code">
                        <span>Agent Id:</span>
                        <h3>
                            {{ Auth::user()->referral_number }}
                        </h3>
                    </div>
                    <form action="/uploadAccount/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="verify">Upload Verification ID</label>
                            <input type="file" class="form-control-file" name="id" id="verify" placeholder=""
                                   aria-describedby="fileHelpId">
                            <small id="fileHelpId" class="form-text text-muted">Not uploading might result in permanent loss of membership</small>
                        </div>
                        <a class="genric-btn info radius" type="submit">Send for Verification</a>
                    </form>
                    <a class="genric-btn danger radius" href="/deleteAccount/{{ Auth::user()->id }}">Delete Account</a>
                </div>
            </div>
        </div>
    </section>
    <!--================End Account Area =================-->
    @include('public.includes.subscription')

@endsection
