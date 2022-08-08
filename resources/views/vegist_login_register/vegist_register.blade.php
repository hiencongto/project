@extends('layouts.site_vegist')

{{$msg ?? ' '}}
@section('content')

<!-- breadcrumb start -->
<section class="about-breadcrumb">
    <div class="about-back section-tb-padding" style="background-image: url(vegist/image/about-image.jpg)">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about-l">
                        <ul class="about-link">
                            <li class="go-home"><a href="index1.html">Home</a></li>
                            <li class="about-p"><span>Register</span></li>
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
                <div class="register-area">
                    <div class="register-box">
                        <h1>Create account</h1>
                        <p>Please register below account detail</p>
                        <form method="post">
                            @csrf
                            <input type="text" name="name" placeholder="Full name">
                            <input type="text" name="phone" placeholder="Phone">
                            <input type="text" name="email" placeholder="Email">
                            <input type="text" name="address" placeholder="Address">
                            <input type="password" name="password" placeholder="Password">
                            <input type="submit" class="btn-style1">
{{--                            <a class="btn-style1">Submit</a>--}}
                        </form>
                    </div>
                    <div class="register-account">
                        <h4>Already an account holder?</h4>
                        <a href="{{route('loginuser')}}" class="ceate-a">Log in</a>
                        <div class="register-info">
                            <a href="terms-conditions.html" class="terms-link"><span>*</span> Terms & conditions.</a>
                            <p>Your privacy and security are important to us. For more information on how we use your data read our <a href="privacy-policy.html">privacy policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login end -->


@endsection
