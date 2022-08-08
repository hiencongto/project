@extends('layouts.front_voxo')

@section('content')

<!-- Order Success Section Start -->
<section class="pt-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <div class="success-icon">
                    <div class="main-container">
                        <div class="check-container">
                            <div class="check-background">
                                <svg viewBox="0 0 65 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 25L27.3077 44L58.5 7" stroke="white" stroke-width="13"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="check-shadow"></div>
                        </div>
                    </div>

                    <div class="success-contain">
                        <h4>Order Success</h4>
                        <h5 class="font-light">Payment Is Successfully Processsed And Your Order Is On The Way</h5>
{{--                        <h6 class="font-light">Transaction ID:267676GHERT105467</h6>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Order Success Section End -->
@endsection
