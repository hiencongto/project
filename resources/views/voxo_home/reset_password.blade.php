@extends('layouts.front_voxo')

@section('content')
    <!-- Log In Section Start -->
    <div class="login-section">
        <div class="materialContainer">
            <div class="box">
                <div class="login-title">
                    <h2>Enter your new password</h2>
                </div> <br>
                @if (session('statusChangePassword'))
                    <p style="color: red">{{ session('statusChangePassword') }}</p>
                @endif

                @foreach ($errors->all() as $error)
                    <p style="color: red">{{ $error }}</p><br>
                @endforeach

                <form method="get" action="{{route('enterNewPassword')}}">
                    <div class="input">
                        <label for="email">Password</label>
                        <input type="password" name="password" id="email" required>
                        <span class="spin"></span>
                        <div class="valid-feedback">
                            Please fill the email
                        </div>
                    </div>

                    <div class="input">
                        <label for="pass">Confirm password</label>
                        <input type="password" name="confirmPassword" id="pass">
                        <span class="spin"></span>
                    </div>

                    <input type="hidden" name="email" value="{{$email}}">

                    <div class="button login">
                        <button type="submit">
                            <span>Reset password</span>
                            <i class="fa fa-check"></i>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- Log In Section End -->

@endsection
