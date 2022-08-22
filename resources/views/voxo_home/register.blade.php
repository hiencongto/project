@extends('layouts.front_voxo')

@section('content')

<body class="signup-page theme-color2">

<!-- Sign Up Section Start -->
<div class="login-section">
    <div class="materialContainer">
        <div class="box">
            <form method="post">
                @csrf
                <div class="login-title">
                    <h2>Register</h2>
                </div><br>
                @if (session('statusRegister'))
                    <p style="color: red">{{ session('statusRegister') }}</p>
                @endif

                @foreach ($errors->all() as $error)
                    <p style="color: red">{{ $error }}</p><br>
                @endforeach

                <div class="input">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>
                    <span class="spin"></span>
                </div>

                <div class="input">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" required>
                    <span class="spin"></span>
                </div>

                <div class="input">
                    <label for="emailname">Email Address</label>
                    <input type="text" name="email" id="emailname" required>
                    <span class="spin"></span>
                </div>

                <div class="input">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" required>
                    <span class="spin"></span>
                </div>

                <div class="input">
                    <label for="pass">Password</label>
                    <input type="password" name="password" id="pass" required>
                    <span class="spin"></span>
                </div>

                <div class="button login">
                    <button>
                        <span>Sign Up</span>
                        <i class="fa fa-check"></i>
                    </button>
                </div>
            </form>

            <p>Already have an account ? <a href="{{route('login')}}" class="theme-color">Sign in now</a></p>
        </div>
    </div>
</div>
<!-- Sign Up Section End -->

<div class="bg-overlay"></div>

@endsection
