@extends('layouts.front_voxo')

@section('content')
    <!-- Log In Section Start -->
    <div class="login-section">
        <div class="materialContainer">
            <div class="box">
                <div class="login-title">
                    <h2>Reset Password</h2>
                </div> <br>
                @foreach ($errors->all() as $error)
                    <p style="color: red">{{ $error }}</p><br>
                @endforeach
                <form method="post">
                    @csrf
                    <div class="input">
                        <input type="text" name="email" id="email" placeholder="Please enter your email!" required>
                        <span class="spin"></span>
                        <div class="valid-feedback">
                            Please fill the email
                        </div>
                    </div>

                    <div class="button login">
                        <button type="submit">
                            <span>Send email</span>
                            <i class="fa fa-check"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Log In Section End -->

@endsection

