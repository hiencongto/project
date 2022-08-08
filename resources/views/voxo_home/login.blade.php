@extends('layouts.front_voxo');

@section('content')
<!-- Log In Section Start -->
<div class="login-section">
    <div class="materialContainer">
        <div class="box">
            <div class="login-title">
                <h2>Login</h2>
            </div>
            <form method="post">
                @csrf
                <div class="input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required>
                    <span class="spin"></span>
                    <div class="valid-feedback">
                        Please fill the email
                    </div>
                </div>

                <div class="input">
                    <label for="pass">Password</label>
                    <input type="password" name="password" id="pass">
                    <span class="spin"></span>
                </div>

                <a href="forgot.html" class="pass-forgot">Forgot your password?</a>

                <div class="button login">
                    <button type="submit">
                        <span>Log In</span>
                        <i class="fa fa-check"></i>
                    </button>
                </div>
            </form>

            <p>Not a member? <a href="{{route('register')}}" class="theme-color">Sign up now</a></p>
        </div>
    </div>
</div>
<!-- Log In Section End -->

@endsection
