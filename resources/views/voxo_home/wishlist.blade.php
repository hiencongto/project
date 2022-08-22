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
                <h3>Wishlist</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('home')}}">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li aria-current="page">Wishlist</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb section end -->

<!-- Cart Section Start -->
<section class="wish-list-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 table-responsive">
                <table class="table cart-table wishlist-table">
                    <thead>
                    <tr class="table-head">
                        <th scope="col">image</th>
                        <th scope="col">product name</th>
                        <th scope="col">price</th>
                        <th scope="col">action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($wishlists))
                    @foreach($wishlists as $wishlist)
                    <tr>
                        <td>
                            <a href="product-left-sidebar.html">
                                <img src="{{asset('images/'.$wishlist->product->image)}}" class=" blur-up lazyload"
                                     alt="">
                            </a>
                        </td>
                        <td>
                            <a href="{{route('productdetail', ['id' => $wishlist->product_id])}}" class="font-light ">{{$wishlist->product->name}}</a>
                        </td>
                        <td>
                            <p class="fw-bold">${{number_format($wishlist->product->price)}}</p>
                        </td>
                        <td>
                            <a href="{{route('delete.wishlist', ['id' => $wishlist->id])}}" class="icon">
                                <i class="fas fa-times"></i>
                            </a>

                        </td>
                    </tr>
                    @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- Cart Section End -->

@endsection
