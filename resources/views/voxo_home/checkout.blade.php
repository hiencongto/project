@extends('layouts.front_voxo')

@section('content')
{{--    {{dd($cartQuantity)}}--}}
{{--    @foreach($districts as $district)--}}
{{--        {{print_r($district->province->name)}}--}}
{{--    @endforeach--}}
{{--    {{dd()}}--}}
<!-- Breadcrumb section start -->
<section class="breadcrumb-section section-b-space">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Checkout</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li >Checkout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb section end -->

<!-- Cart Section Start -->
<section class="section-b-space">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8">
                <h3 class="mb-3">Billing address</h3>
                @php $total = 0;
                    $cartQuantity = count($carts);
                @endphp
                @foreach($carts as $cart)
                    @php $total += $cart['product_price']*$cart['product_quantity']; @endphp
                @endforeach
                <form class="needs-validation" method="post">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for="fname" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fname" placeholder="Enter Your Name" name="name" >
                        </div>

                        <div class="col-md-6">
                            <label for="lname" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="lname" placeholder="Enter Your Phone Number" name="phone">
                        </div>

                        <div class="col-md-6">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email" required>
                        </div>

                        <div class="col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter Your Address" name="address" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">City</label>
                            <select class="form-select custome-form-select" id="validationCustom05" name="province" required>
                                <option selected disabled value="">Choose...</option>
                                @foreach($provinces as $province)
                                    <option value="{{$province->name}}">{{$province->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">District</label>

                            <select class="form-select custome-form-select" id="validationCustom04" name="district" required>
                                <option selected disabled value="">Choose...</option>
                                @foreach($districts as $district)
                                <option value="{{$district->name}}">{{$district->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="zip" class="form-label">Note</label>
                            <input type="text" class="form-control" id="zip" aria-describedby="emailHelp" placeholder="Note" name="note">
                        </div>
                        <input type="hidden" name="quantity" value="{{$total}}">
                    </div>

                    <button class="btn btn-solid-default mt-4" type="submit" >Continue to checkout</button>
                </form>
            </div>

            <div class="col-lg-4">
                <div class="your-cart-box">
                    <h3 class="mb-3 d-flex text-capitalize">Your cart<span
                            class="badge bg-theme new-badge rounded-pill ms-auto bg-dark">{{$cartQuantity}}</span>
                    </h3>
                    <ul class="list-group mb-3">
                        @foreach($carts as $cart)
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">{{$cart['product_name']}}</h6>
                                <small>{{number_format($cart['product_quantity'])}}</small>
                            </div>
                            <span>$.{{number_format($cart['product_price']*$cart['product_quantity'])}}</span>
                        </li>
                        @endforeach
{{--                        <li class="list-group-item d-flex justify-content-between lh-condensed">--}}
{{--                            <div>--}}
{{--                                <h6 class="my-0">Second product</h6>--}}
{{--                                <small>Brief description</small>--}}
{{--                            </div>--}}
{{--                            <span>$8</span>--}}
{{--                        </li>--}}
{{--                        <li class="list-group-item d-flex justify-content-between lh-condensed">--}}
{{--                            <div>--}}
{{--                                <h6 class="my-0">Third item</h6>--}}
{{--                                <small>Brief description</small>--}}
{{--                            </div>--}}
{{--                            <span>$5</span>--}}
{{--                        </li>--}}
                        <li class="list-group-item d-flex justify-content-between lh-condensed active">
                            <div class="text-dark">
                                <h6 class="my-0">Promo code</h6>
                                <small>EXAMPLECODE</small>
                            </div>
                            <span>-$5</span>
                        </li>
                        <li class="list-group-item d-flex lh-condensed justify-content-between">
                            <span class="fw-bold">Total (USD)</span>
                            <strong>$.{{number_format($total)}}</strong>
                        </li>
                    </ul>

                    <form class="card border-0">
                        <div class="input-group custome-imput-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-solid-default rounded-0">Redeem</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cart Section End -->


</body>


<!-- Mirrored from themes.pixelstrap.com/voxo/front-end/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Jul 2022 15:22:35 GMT -->
</html>
@endsection
