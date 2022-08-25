@extends('layouts.front_voxo')

@section('content')

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
                <h3>Shopping Cart</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li >Cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb section end -->

<!-- Cart Section Start -->
<section class="cart-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="count-down">

                </div>
            </div>
            @if($carts)
            <div class="col-sm-12 table-responsive mt-4 listcard">
                <table class="table cart-table pricecard" >
                    <thead>
                    <tr class="table-head">
                        <th scope="col">image</th>
                        <th scope="col">product name</th>
                        <th scope="col">price</th>
                        <th scope="row">quantity</th>
                        <th scope="col">action</th>
                        <th scope="col">total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $total = 0; @endphp
                @if($carts)
                    @foreach($carts as $cart)
                    <tr>
                        <td>
                            <a href="product-left-sidebar.html">
                                <img src="{{asset('images/'.$cart['product_image'])}}" class=" blur-up lazyload"
                                     alt="">
                            </a>
                        </td>
                        <td>
                            <a href="product-left-sidebar.html">{{$cart['product_name']}}</a>
                        </td>
                        <td>
                            <h2 >${{number_format($cart['product_price'])}}</h2>
                            <input type="hidden" class="pricecart" value="{{$cart['product_price']}}">
                        </td>
                        <td>
                            <div class="qty-box">
                                <div class="input-group">
                                    <input type="number"  name="quantity" class="form-control input-number quantitycart_{{$cart['product_id']}}" onchange="updateCart({{$cart['product_id']}})" value="{{$cart['product_quantity']}}">
{{--                                    <input type="hidden" name="{{$va}}" >--}}
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="{{route('delete.cart', ['id' => $cart['product_id']])}}">
                                <i class="fas fa-times"></i>
                            </a>
                        </td>
                        <td>
                            @php $total += $cart['product_price'] * $cart['product_quantity'] ;@endphp
                            <h2 class="td-color ">{{number_format($cart['product_price'] * $cart['product_quantity'])}}</h2>
                        </td>
                    </tr>
                    @endforeach
                @endif
                    </tbody>
                </table>
            </div>

            <div class="col-12 mt-md-5 mt-4">
                <div class="row">
                    <div class="col-sm-7 col-5 order-1">
                        <div class="left-side-button text-end d-flex d-block justify-content-end">
                            <a href="{{route('delete.all.cart')}}"
                               class="text-decoration-underline theme-color d-block text-capitalize">clear all items</a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-7">
                        <div class="left-side-button float-start">
                            <a href="{{route('productlist')}}" class="btn btn-solid-default btn fw-bold mb-0 ms-0">
                                <i class="fas fa-arrow-left"></i> Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cart-checkout-section">
                <div class="row g-4">
                    <div class="col-lg-4 col-sm-6">
                        <div class="promo-section">
                            <form class="row g-3">

                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 ">
                        <div class="checkout-button">
                            <a href="{{route('add.order')}}" class="btn btn-solid-default btn fw-bold">
                                Check Out <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4" id="totalprice">
                        <div class="cart-box totalprice">
                            <div class="cart-box-details">
                                <div class="total-details">
                                    <div class="top-details">
                                        <h3>Cart Totals</h3>
                                        <h6>Total MRP <span>$.{{number_format($total)}}</span></h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
                <p style="color: red">Please choose your product !</p>
            @endif
        </div>
    </div>
</section>
<!-- Cart Section End -->


    <script>
        function updateCart(id)
        {
            var quantity = $('.quantitycart_' + id).val();

            $.get("{{route('update.cart')}}", { id : id, quantity: quantity},function (){
                $('.listcard').load("{{route('show.cart')}} .pricecard");
                $('#totalprice').load("{{route('show.cart')}} .totalprice");
                $('#frontlistcard').load("{{route('showminicart')}} .frontpricecard");

                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Success',
                    showConfirmButton: false,
                    timer: 500
                });
            });
        }
    </script>

@endsection
