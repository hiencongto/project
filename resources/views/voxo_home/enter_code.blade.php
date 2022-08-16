@extends('layouts.front_voxo');

@section('content')
    {{dd($request)}}
    <!-- Log In Section Start -->
    <div class="login-section">
        <div class="materialContainer">
            <div class="box">
                <div class="login-title">
                    <h2>Confirm your email</h2>
                </div>
                <form method="post">
                    @csrf
                    <div class="input">
                        <label for="code">Enter your code</label>
                        <input type="password" name="code" id="code">
                        <span class="spin"></span>
                    </div>

                    <div class="button login">
                        <button type="submit">
                            <span>Enter</span>
                            <i class="fa fa-check"></i>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- Log In Section End -->

@endsection

