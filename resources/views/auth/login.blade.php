@extends('layouts.app')
@section('content')
      <!-- BREADCRUMB AREA START -->
      <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Account Login or Signup</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->



    <!-- LOGIN AREA START -->
    <div class="ltn__login-area pb-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title" style="    float: left;text-align: inherit;margin-left: 108px;">Sign In</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="account-login-inner">
                        <form action="{{ route('login') }}" method="post" class="ltn__form-box contact-form-box">
                            @csrf
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email*" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required="" placeholder="Password*">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="btn-wrapper mt-0">
                                <button class="theme-btn-1 btn btn-block" type="submit">SIGN IN</button>
                            </div>
                            <div class="go-to-btn mt-20">
                                <a href="{{ route('password.request') }}"><small>FORGOTTEN YOUR PASSWORD?</small></a>
                            </div>
                        </form>
                        <button style="background:black;padding: 14px 15px;" type="submit" class="theme-btn-1 btn btn-effect-1"><i class="fab fa-facebook-square"></i> Login with Facebook </button>
					    <a style="padding: 14px 15px; background:black;" href="{{ url('/auth/redirect/google') }}" class="theme-btn-1 btn btn-effect-1"><i class="fab fa-google"></i> Login with Google </a>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="account-create text-center pt-50" style="margin-top: -100px;">
                        <h1 class="section-title" style="float: left;text-align: inherit;margin-left: 108px; font-size: 30px;">DON'T HAVE AN ACCOUNT? <br><span>SignUp Now!</span> </h1>
                        <div class="account-login-inner">
                            <form action="{{ route('register') }}" method="post" class="ltn__form-box contact-form-box" id="contact_form">
                                @csrf
                                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Your Full Name " name="name" required="">
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" aria-describedby="emailHelp" required="" placeholder="Mobile Number">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Enter Your Email " required="">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password*">
                                <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password*">
                                <div class="btn-wrapper">
                                    <button class="theme-btn-1 btn reverse-color btn-block" type="submit">CREATE ACCOUNT</button>
                                </div>
                            </form>
                            <div class="by-agree text-center">
                                <p>By creating an account, you agree to our:</p>
                                <p><a href="#">TERMS OF CONDITIONS  &nbsp; &nbsp; | &nbsp; &nbsp;  PRIVACY POLICY</a></p>
                                <div class="go-to-btn mt-50">
                                    <a href="{{route('login')}}">ALREADY HAVE AN ACCOUNT ?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN AREA END -->


@endsection
