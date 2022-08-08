@extends('layouts.site_vegist')

<!-- breadcrumb start -->
@section('content')
<section class="about-breadcrumb">
    <div class="about-back section-tb-padding" style="background-image: url(vegist/image/about-image.jpg)">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about-l">
                        <ul class="about-link">
                            <li class="go-home"><a href="index1.html">Home</a></li>
                            <li class="about-p"><span>Login</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->
<!-- login start -->
<section class="section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="login-area">
                    <div class="login-box">
                        <h1>Login</h1>
                        <p>Please login below account detail</p>
                        {{$msg ?? ' '}}
                        <form method="post">
                            @csrf
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Email">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password">
{{--                            <a href="login.html" class="btn-style1">Sign in</a>--}}
                            <input type="submit" class="btn-style1">
                            <a href="forgot-password.html" class="re-password">Forgot your password?</a>
                        </form>
                    </div>
                    <div class="login-account">
                        <h4>Don't have an account?</h4>
                        <a href="{{route('registeruser')}}" class="ceate-a">Create account</a>
                        <div class="login-info">
                            <a href="terms-conditions.html" class="terms-link"><span>*</span> Terms & conditions.</a>
                            <p>Your privacy and security are important to us. For more information on how we use your data read our <a href="privacy-policy.html">privacy policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<!-- login end -->
