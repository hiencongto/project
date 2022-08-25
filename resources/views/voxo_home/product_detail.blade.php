
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
                    <h3>Product Detail</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                       <li>Product Detail</li>  {{--     class="breadcrumb-item active" aria-current="page" --}}
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->


<!-- Shop Section start -->
<section>
    <div class="container">
        <div class="row gx-4 gy-5">
            <div class="col-12">
                <div class="details-items">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="degree-section">
                                <div class="details-image ratio_asos">
                                    <div>
                                        <div class="product-image-tag">
                                            <img src="{{asset('images/'.$product->image)}}" id="zoom_01"
                                                 data-zoom-image="{{asset('images/'.$product->image)}}"
                                                 class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="">

                                            <div class="label-tag">
                                                <h6><i class="fas fa-star"></i> 4.8 <span
                                                        class="font-light">120</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-image-tag">
                                            <img src="{{asset('voxo_front/assets/images/fashion/2.jpg')}}" id="zoom_02"
                                                 data-zoom-image="{{asset('voxo_front/assets/images/fashion/2.jpg')}}"
                                                 class="img-fluid w-100 image_zoom_cls-1 blur-up lazyload" alt="">

                                            <div class="label-tag">
                                                <h6><i class="fas fa-star"></i> 4.8 <span
                                                        class="font-light">120</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-image-tag">
                                            <img src="{{asset('voxo_front/assets/images/fashion/3.jpg')}}" id="zoom_03"
                                                 data-zoom-image="{{asset('voxo_front/assets/images/fashion/3.jpg')}}"
                                                 class="img-fluid w-100 image_zoom_cls-2 blur-up lazyload" alt="">

                                            <div class="label-tag">
                                                <h6><i class="fas fa-star"></i> 4.8 <span
                                                        class="font-light">120</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="product-image-tag">
                                            <img src="{{asset('voxo_front/assets/images/fashion/4.jpg')}}" id="zoom_04"
                                                 data-zoom-image="{{asset('voxo_front/assets/images/fashion/4.jpg')}}"
                                                 class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">

                                            <div class="label-tag">
                                                <h6><i class="fas fa-star"></i> 4.8 <span
                                                        class="font-light">120</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="details-image-option black-slide mt-4 rounded">
                                    <div>
                                        <img src="{{asset('images/'.$product->image)}}" class="img-fluid blur-up lazyload"
                                             alt="">
                                    </div>
                                    <div>
                                        <img src="{{asset('voxo_front/assets/images/fashion/2.jpg')}}" class="img-fluid blur-up lazyload"
                                             alt="">
                                    </div>
                                    <div>
                                        <img src="{{asset('voxo_front/assets/images/fashion/3.jpg')}}" class="img-fluid blur-up lazyload"
                                             alt="">
                                    </div>
                                    <div>
                                        <img src="{{asset('voxo_front/assets/images/fashion/4.jpg')}}" class="img-fluid blur-up lazyload"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="cloth-details-size">
                                <div class="product-count">

                                </div>

                                <div class="details-image-concept">
                                    <h2>{{$product->name}}</h2>
                                </div>

                                <div class="label-section">
{{--                                    <span class="badge badge-grey-color">#1 Best seller</span>--}}
{{--                                    <span class="label-text">in fashion</span>--}}
                                </div>

                                <h3 class="price-detail">${{number_format($product->price)}}</h3>

                                <div class="color-image">
                                    <div class="image-select">
{{--                                        <h5>Color :</h5>--}}
{{--                                        <ul class="image-section">--}}
{{--                                            <li>--}}
{{--                                                <a href="javascript:void(0)">--}}
{{--                                                    <img src="{{asset('voxo_front/assets/images/fashion/product/front/5.jpg')}}"--}}
{{--                                                         class="img-fluid blur-up lazyload" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="javascript:void(0)">--}}
{{--                                                    <img src="{{asset('voxo_front/assets/images/fashion/product/front/6.jpg')}}"--}}
{{--                                                         class="img-fluid blur-up lazyload" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="javascript:void(0)">--}}
{{--                                                    <img src="{{asset('voxo_front/assets/images/fashion/product/front/7.jpg')}}"--}}
{{--                                                         class="img-fluid blur-up lazyload" alt="">--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
                                    </div>
                                </div>

                                <div id="selectSize" class="addeffect-section product-description border-product">
                                    <h6 class="product-title size-text">select size
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                           data-bs-target="#sizemodal">size chart</a>
                                    </h6>

                                    <h6 class="error-message">please select size</h6>

                                    <div class="size-box">
                                        <select class="btn quantity-left-minus pr_size">
                                            <option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                            <option value="xl">XL</option>
                                        </select>
                                    </div>

                                <div id="selectSize" class="addeffect-section product-description border-product">

                                    <h6 class="product-title product-title-2 d-block">quantity</h6>

                                    <div class="qty-box">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </span>
                                            <input type="text" name="quantity" class="form-control input-number pr_quantity"  value="1" min="1" >
                                            <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-buttons">
                                    @if(\Illuminate\Support\Facades\Auth::guard('user')->user())
                                    <button type="submit" class="btn btn-solid" onclick="addWishlist({{$product->id}})">
                                        <i class="fa fa-bookmark fz-16 me-2"></i>Wishlist
                                    </button>
                                    @endif
                                @if (\Illuminate\Support\Facades\Auth::guard('user')->user())
                                    @if($product->product_quantity > 0)
                                    <button type="submit" class="btn btn-solid" onclick="addCart({{$product->id}})">
                                        <i class="fa fa-shopping-cart"></i>Add To Cart
                                    </button>
                                    @else
                                            <button class="btn btn-solid" >
                                                <i class="fa fa-shopping-cart"></i>Out of stock
                                            </button>
                                    @endif
                                @else
{{--                                     <button type="submit" class="btn btn-solid" onclick="returnLogin()">--}}
                                        <a class="btn btn-solid" href="{{route('login')}}"><i class="fa fa-shopping-cart"></i>Add To Cart</a>
{{--                                          <i class="fa fa-shopping-cart"></i>Add To Cart--}}
{{--                                     </button>--}}
                                @endif
                                </div>

                                <ul class="product-count shipping-order">
                                    <li>
                                        <span class="lang">Free shipping for orders above $500 USD</span>
                                    </li>
                                </ul>

{{--                                <div class="mt-2 mt-md-3 border-product">--}}
{{--                                    <h6 class="product-title hurry-title d-block">Hurry Up! Left <span>10</span>--}}
{{--                                        in--}}
{{--                                        stock</h6>--}}
{{--                                    <div class="progress">--}}
{{--                                        <div class="progress-bar" role="progressbar" style="width: 78%"></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="font-light timer-5">--}}
{{--                                        <h5>Order in the next to get</h5>--}}
{{--                                        <ul class="timer1">--}}
{{--                                            <li class="counter">--}}
{{--                                                <h5 id="days">&#9251;</h5> Days :--}}
{{--                                            </li>--}}
{{--                                            <li class="counter">--}}
{{--                                                <h5 id="hours">&#9251;</h5> Hour :--}}
{{--                                            </li>--}}
{{--                                            <li class="counter">--}}
{{--                                                <h5 id="minutes">&#9251;</h5> Min :--}}
{{--                                            </li>--}}
{{--                                            <li class="counter">--}}
{{--                                                <h5 id="seconds">&#9251;</h5> Sec--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="border-product">
                                    <h6 class="product-title d-block">share it</h6>
                                    <div class="product-icon">
                                        <ul class="product-social">
                                            <li>
                                                <a href="https://www.facebook.com/">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.google.com/">
                                                    <i class="fab fa-google-plus-g"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li class="pe-0">
                                                <a href="https://www.google.com/">
                                                    <i class="fas fa-rss"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="cloth-review">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#desc" type="button">Description</button>

                            <button class="nav-link" id="nav-size-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-guide" type="button">Sizing Guide</button>

                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#review" type="button">Review</button>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="desc">
                            <div class="shipping-chart">
                                <div class="part">
                                    <h4 class="inner-title mb-2">Give you a complete account of the system</h4>
                                    <p class="font-light">{{$product->description}}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade overflow-auto" id="nav-guide">
                            <div class="table-responsive">
                                <table class="table table-pane mb-0">
                                    <tbody>
                                    <tr class="bg-color">
                                        <th class="my-2">US Sizes</th>
                                        <td>6</td>
                                        <td>6.5</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>8.5</td>
                                        <td>9</td>
                                        <td>9.5</td>
                                        <td>10</td>
                                        <td>10.5</td>
                                        <td>11</td>
                                    </tr>

                                    <tr>
                                        <th>Euro Sizes</th>
                                        <td>39</td>
                                        <td>39</td>
                                        <td>40</td>
                                        <td>40-41</td>
                                        <td>41</td>
                                        <td>41-42</td>
                                        <td>42</td>
                                        <td>42-43</td>
                                        <td>43</td>
                                        <td>43-44</td>
                                    </tr>

                                    <tr class="bg-color">
                                        <th>UK Sizes</th>
                                        <td>5.5</td>
                                        <td>6</td>
                                        <td>6.5</td>
                                        <td>7</td>
                                        <td>7.5</td>
                                        <td>8</td>
                                        <td>8.5</td>
                                        <td>9</td>
                                        <td>10.5</td>
                                        <td>11</td>
                                    </tr>

                                    <tr>
                                        <th>Inches</th>
                                        <td>9.25"</td>
                                        <td>9.5"</td>
                                        <td>9.625"</td>
                                        <td>9.75"</td>
                                        <td>9.9735"</td>
                                        <td>10.125"</td>
                                        <td>10.25"</td>
                                        <td>10.5"</td>
                                        <td>10.765"</td>
                                        <td>10.85</td>
                                    </tr>

                                    <tr class="bg-color">
                                        <th>CM</th>
                                        <td>23.5</td>
                                        <td>24.1</td>
                                        <td>24.4</td>
                                        <td>25.4</td>
                                        <td>25.7</td>
                                        <td>26</td>
                                        <td>26.7</td>
                                        <td>27</td>
                                        <td>27.3</td>
                                        <td>27.5</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="review">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="customer-rating">
                                        <h2>Customer reviews</h2>
                                    </div>
                                </div>

                                <div class="col-lg-12">

                                    <div class="review-box">
                                        <form class="row g-4">
                                            <div class="col-12">
                                                <label class="mb-1" for="comments">Comments</label>
                                                <textarea class="form-control addComment" placeholder="Leave a comment here"
                                                          id="comments" style="height: 100px" required></textarea>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit"
                                                        class="btn default-light-theme default-theme default-theme-2" onclick="addComment({{$product->id}})">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-12 mt-4">
                                    <div class="customer-review-box">
                                        <h4>Customer Reviews</h4>

                                        @if(isset($feedbacks))
                                            @foreach($feedbacks as $feedback)
                                                @if( $feedback->product_id == $product->id)
                                        <div class="customer-section" id="userComment">
                                            <div class="customer-profile">
                                                <img src="assets/images/inner-page/review-image/1.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </div>

                                            <div class="customer-details userComment">
                                                <h5>{{$feedback->user->name}}</h5>

                                                <p class="font-light">{{$feedback->comment}}</p>

                                                <p class="date-custo font-light">- {{date_format($feedback->created_at, 'Y/m/d')}}</p>
                                            </div>
                                        </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section end -->

<!-- product section start -->

<!-- product section end -->

<!-- Size Modal Start -->
<div class="modal modal-size fade" id="sizemodal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <img src="{{asset('voxo_front/assets/images/size-chart.jpg')}}" alt="" class="img-fluid blur-up lazyload">
            </div>
        </div>
    </div>
</div>
<!-- Size Modal End -->
    <input class="maxQuantity" type="hidden" value="{{$product->product_quantity}}">
<!-- Add To Cart Notification -->
<div class="added-notification" id="cartQuantity">
    <img src="voxo_front/assets/images/fashion/banner/2.jpg" class="img-fluid blur-up lazyload" alt="">
    <h3>added to cart</h3>
</div>
<!-- Add To Cart Notification -->



<script>
    function addCart(id) {
        var size = $('.pr_size').val();
        var quantity = $('.pr_quantity').val();
        var maxQuantity = $('.maxQuantity').val();
        var cartQuantity = $('.cartQuantity').val();

        if (quantity <= 0){
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "This product will be deleted in your cart.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'I never forget a face – but in your case, I’ll be glad to make an exception.',
                        'success'
                    )
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your product is safe :)',
                        'error'
                    )
                }
            })
        }
        else if (quantity > maxQuantity) {
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'There are ' + maxQuantity + ' products in stock',
                showConfirmButton: false,
                timer: 1000
            });
        }
        else{
            $.get("{{route('addCart')}}", {'id': id, 'quantity' : quantity, 'size' : size}, function () {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Success',
                    showConfirmButton: false,
                    timer: 500
                });

                $('#frontlistcard').load("{{route('showminicart')}} .frontpricecard");
            });
        }

    }

    function addWishlist(id)
    {

        $.get("{{route('add.wishlist')}}", {'id': id}, function (){
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Success',
                showConfirmButton: false,
                timer: 500
            });
        });
    }

    function addComment(id)
    {
        var comment = $('.addComment').val();

        $.get("{{route('productFeedback')}}", {'id' : id, 'comment' : comment}, function (){
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Success',
                showConfirmButton: false,
                timer: 500
            });

            $('#userComment').load("{{route('productlist')}} .userComment");
        });
    }

    function returnLogin(){
        $.get("{{route('login')}}");
    }
</script>

@endsection



