@extends('layouts.front_voxo')

@section('content')
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <h3>Shop List</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li>Shop Fashion</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb section end -->

<!-- Shop Section start -->
<section class="section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="category-option">
                    <div class="button-close mb-3">
                        <button class="btn p-0"><i data-feather="arrow-left"></i> Close</button>
                    </div>
                    <div class="accordion category-name" id="accordionExample">

                    <form method="get" action="{{route('searchProduct')}}">
                        <div class="accordion-item category-rating">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo">
                                    Brand
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body category-scroll">
                                    <ul class="category-list">
                                        @foreach($brands as $brand)
                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" type="radio" name="brand_id" id="flexCheckDefault1" value="{{$brand->id}}">
                                                <label class="form-check-label" for="flexCheckDefault1">{{$brand->name}}</label>
{{--                                                <p class="font-light">(25)</p>--}}
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div  class="accordion-item category-price ">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour">Price</button>
                            </h2>
                                <div data-role="rangeslider">
                                    <div data-role="rangeslider" class="ui-rangeslider">
                                        </br>
                                        <label for="price-min" id="price-min-label">From:</label>
                                        <input type="number" data-type="range" name="price_min" id="price-min" value="2" min="0" max="499" class="ui-shadow-inset ui-corner-all ui-slider-input ui-rangeslider-first ui-body-inherit">
                                        <label for="price-max" id="price-max-label">To:</label>
                                        <input type="number" data-type="range" name="price_max" id="price-max" value="500" min="500" max="1000" class="ui-shadow-inset ui-corner-all ui-slider-input ui-rangeslider-last ui-body-inherit">
                                        <div class="ui-rangeslider-sliders"><div role="application" class="ui-slider-track ui-shadow-inset ui-bar-inherit ui-corner-all" aria-disabled="false"><div class="ui-slider-bg ui-btn-active" style="width: 60%; margin-left: 20%;"></div></div><div role="application" class="ui-slider-track ui-shadow-inset ui-bar-inherit ui-corner-all" aria-disabled="false"><div class="ui-slider-bg ui-btn-active" style="width: 60%; margin-left: 20%;"></div><a href="#" class="ui-slider-handle ui-btn ui-shadow ui-btn-null" role="slider" aria-valuemin="0" aria-valuemax="1000" aria-valuenow="200" aria-valuetext="200" title="200" aria-labelledby="price-min-label" style="left: 20%;"></a><a href="#" class="ui-slider-handle ui-btn ui-shadow ui-btn-null" role="slider" aria-valuemin="0" aria-valuemax="1000" aria-valuenow="800" aria-valuetext="800" title="800" aria-labelledby="price-max-label" style="left: 80%;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="accordion-item category-rating">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne">
                                    Category
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                 aria-labelledby="headingOne">
                                <div class="accordion-body category-scroll">
                                    <ul class="category-list">
                                        @foreach($categories as $category)
                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" type="radio" name="category_id" id="flexCheckDefault10" value="{{$category->id}}" >
                                                <label class="form-check-label" for="flexCheckDefault10">{{$category->name}}</label>
{{--                                                <p class="font-light">(25)</p>--}}
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive">
                                    Discount Range
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse show"
                                 aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="category-list">
                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" type="checkbox"
                                                       id="flexCheckDefault19">
                                                <label class="form-check-label" for="flexCheckDefault19">5% and
                                                    above</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" type="checkbox"
                                                       id="flexCheckDefault20">
                                                <label class="form-check-label" for="flexCheckDefault20">10% and
                                                    above</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" type="checkbox"
                                                       id="flexCheckDefault21">
                                                <label class="form-check-label" for="flexCheckDefault21">20% and
                                                    above</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="btn btn-solid" type="submit" style="text-align: center;">
                                   Filter
                                </button>
                            </h2>
                        </div>
                    </form>

                        <!-- Slider section start -->
                        <div class="most-popular">
                            <div class="title title-2 text-lg-start">
                                <h3>Most Popular</h3>
                            </div>

                            <div class="product-slider round-arrow1">
                                <div>
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="product-image">
                                                <a href="javascript:void(0)">
                                                    <img src="{{asset('voxo_front/assets/images/fashion/product/front/1.jpg')}}"
                                                         class="blur-up lazyload" alt="">
                                                </a>
                                                <div class="product-details">
                                                    <h6 class="font-light">Regular Fit</h6>
                                                    <a href="javascript:void(0)" class="">
                                                        <h3>Slim Fit Plastic Coat</h3>
                                                    </a>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="product-image">
                                                <a href="javascript:void(0)">
                                                    <img src="{{asset('voxo_front/assets/images/fashion/product/front/2.jpg')}}"
                                                         class="blur-up lazyload" alt="">
                                                </a>
                                                <div class="product-details">
                                                    <h6 class="font-light">Regular Fit</h6>
                                                    <a href="javascript:void(0)" class="">
                                                        <h3>Slim Fit Plastic Coat</h3>
                                                    </a>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="product-image">
                                                <a href="javascript:void(0)">
                                                    <img src="{{asset('voxo_front/assets/images/fashion/product/front/3.jpg')}}"
                                                         class="blur-up lazyload" alt="">
                                                </a>
                                                <div class="product-details">
                                                    <h6 class="font-light">Regular Fit</h6>
                                                    <a href="javascript:void(0)" class="">
                                                        <h3>Slim Fit Plastic Coat</h3>
                                                    </a>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="product-image">
                                                <a href="javascript:void(0)">
                                                    <img src="{{asset('voxo_front/assets/images/fashion/product/front/6.jpg')}}"
                                                         class="blur-up lazyload" alt="">
                                                </a>
                                                <div class="product-details">
                                                    <h6 class="font-light">Regular Fit</h6>
                                                    <a href="javascript:void(0)" class="">
                                                        <h3>Slim Fit Plastic Coat</h3>
                                                    </a>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="product-image">
                                                <a href="javascript:void(0)">
                                                    <img src="{{asset('voxo_front/assets/images/fashion/product/front/7.jpg')}}"
                                                         class="blur-up lazyload" alt="">
                                                </a>
                                                <div class="product-details">
                                                    <h6 class="font-light">Regular Fit</h6>
                                                    <a href="javascript:void(0)" class="">
                                                        <h3>Slim Fit Plastic Coat</h3>
                                                    </a>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="product-image">
                                                <a href="javascript:void(0)">
                                                    <img src="{{asset('voxo_front/assets/images/fashion/product/front/8.jpg')}}"
                                                         class="blur-up lazyload" alt="">
                                                </a>
                                                <div class="product-details">
                                                    <h6 class="font-light">Regular Fit</h6>
                                                    <a href="javascript:void(0)" class="">
                                                        <h3>Slim Fit Plastic Coat</h3>
                                                    </a>
                                                    <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                            class="theme-color">$35.50</span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider Section End -->
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-12 ratio_30">
                <div class="banner-deatils">
                    <div class="banner-image">
                        <img src="{{asset('voxo_front/assets/images/fashion/banner.jpg')}}" class="img-fluid bg-img blur-up lazyload"
                             alt="">
                        <div class="banner-content">
                            <div>
                                <h3>Shop The Latest Trends</h3>
                                <p>Shop the latest clothing trends with our weekly edit of what's new in online at
                                    Voxo. From out latest woman collection.</p>
                            </div>
                        </div>
                    </div>
                    <div class="banner-contain mt-3 mb-5">
                        <p class="font-light">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen
                            book. It has survived not only five centuries, but also the leap into electronic
                            typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>
                <div class="row g-4">
                    <!-- filter button -->
                    <div class="filter-button">
                        <button class="btn filter-btn p-0"><i data-feather="align-left"></i> Filter</button>
                    </div>
                    <!-- filter button -->

                    <!-- label and featured section -->
                    <div class="col-md-12">
                        <ul class="short-name">
                        </ul>
                    </div>

                    <div class="col-12">
                        <div class="filter-options">
                            <div class="select-options">
                                <div class="page-view-filter">
                                    <div class="dropdown select-featured">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            24 Page per view
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)">Alphabetically
                                                    A-Z</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)">Alphabetically
                                                    Z-A</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)">Price, High To
                                                    Low</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)">Price, Low To
                                                    High</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)">Date, Old To
                                                    New</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)">Date, New To
                                                    Old</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="dropdown select-featured">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        Select Featured
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)">Jeans</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)">T-Shirt</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)">Shirt</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)">Jacket</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0)">Hoodie</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="grid-options d-sm-inline-block d-none">
                                <ul class="d-flex">
                                    <li class="two-grid">
                                        <a href="javascript:void(0)">
                                            <img src="{{asset('voxo_front/assets/svg/grid-2.svg')}}" class="img-fluid blur-up lazyload"
                                                 alt="">
                                        </a>
                                    </li>
                                    <li class="three-grid d-md-inline-block d-none">
                                        <a href="javascript:void(0)">
                                            <img src="{{asset('voxo_front/assets/svg/grid-3.svg')}}" class="img-fluid blur-up lazyload"
                                                 alt="">
                                        </a>
                                    </li>
                                    <li class="grid-btn active d-lg-inline-block d-none">
                                        <a href="javascript:void(0)">
                                            <img src="{{asset('voxo_front/assets/svg/grid.svg')}}" class="img-fluid blur-up lazyload"
                                                 alt="">
                                        </a>
                                    </li>
                                    <li class="list-btn">
                                        <a href="javascript:void(0)">
                                            <img src="{{asset('voxo_front/assets/svg/list.svg')}}" class="img-fluid blur-up lazyload"
                                                 alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- label and featured section -->

                <!-- Prodcut setion -->
                <div
                    class="row g-sm-4 g-3 row-cols-lg-4 row-cols-md-3 row-cols-2 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section">
                    @foreach($products as $product)
                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('images/'.$product->image)}}"
                                             class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('voxo_front/assets/images/fashion/product/back/1.jpg')}}"
                                             class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn"
                                               data-bs-toggle="modal" data-bs-target="#addtocart">
                                                <i data-feather="shopping-bag"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                               data-bs-target="#quick-view" >
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <div class="rating-details">
                                    <span class="font-light grid-content">{{$product->brand->name}}</span>
                                    <ul class="rating mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-price">
                                    <a href="{{route('productdetail', ['id' => $product->id])}}" class="font-default">
                                        <h5 class="ms-0">{{$product->name}}</h5>
                                    </a>
                                    <h3 class="theme-color">${{$product->price}}</h3>
                                    <button onclick="location.href = 'cart.html';)" class="btn listing-content">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <nav class="page-section">
                    <ul class="pagination">
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section end -->

<!-- Subscribe Section Start -->
<section class="subscribe-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6">
                <div class="subscribe-details">
                    <h2 class="mb-3">Subscribe Our News</h2>
                    <h6 class="font-light">Subscribe and receive our newsletters to follow the news about our fresh
                        and fantastic Products.</h6>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
                <div class="subsribe-input">
                    <div class="input-group">
                        <input type="text" class="form-control subscribe-input" placeholder="Your Email Address">
                        <button class="btn btn-solid-default" type="button">Button</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Subscribe Section End -->




@endsection
