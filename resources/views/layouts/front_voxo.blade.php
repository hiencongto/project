<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/voxo/front-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Jul 2022 15:20:29 GMT -->
<head>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="manifest" href="manifest.json" />
    <link rel="icon" href="{{asset('voxo_front/assets/images/favicon/2.png')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('voxo_front/assets/images/favicon/2.png')}}" />
    <meta name="theme-color" content="#e22454" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="Voxo" />
    <meta name="msapplication-TileImage" content="{{asset('voxo_front/assets/images/favicon/2.png')}}" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Voxo">
    <meta name="keywords" content="Voxo">
    <meta name="author" content="Voxo">
    <link rel="icon" href="{{asset('voxo_front/assets/images/favicon/2.png')}}" type="image/x-icon" />
    <title>Index</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{asset('voxo_front/assets/css/vendors/bootstrap.css')}}">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('voxo_front/assets/css/vendors/font-awesome.css')}}">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('voxo_front/assets/css/vendors/feather-icon.css')}}">

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="{{asset('voxo_front/assets/css/vendors/animate.css')}}">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{asset('voxo_front/assets/css/vendors/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('voxo_front/assets/css/vendors/slick/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('voxo_front/assets/css/element-category.css')}}">

    <!-- Theme css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{asset('voxo_front/assets/css/demo2.css')}}">

</head>

<body class="theme-color2 light ltr">

<!-- header start -->
<header class="header-style-2" id="home">
    @php
        $user = \Illuminate\Support\Facades\Auth::guard('user')->user();
    @endphp
    <div class="main-header navbar-searchbar">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-menu">
                        <div class="menu-left">
                            <div class="brand-logo">
                                <a href="{{route('home')}}">
                                    <svg class="svg-icon">
                                        <use class="fill-color" xlink:href="{{asset('voxo_front/assets/svg/icons.svg#logo')}}"></use>
                                    </svg>
                                    <img src="{{asset('voxo_front/assets/images/logo.png')}}" class="img-fluid blur-up lazyload" alt="logo">
                                </a>
                            </div>
                        </div>
                        <nav>
                            <div class="main-navbar">
                                <div id="mainnav">
                                    <div class="toggle-nav">
                                        <i class="fa fa-bars sidebar-bar"></i>
                                    </div>
                                    <ul class="nav-menu">
                                        <li class="back-btn d-xl-none">
                                            <div class="close-btn">
                                                Menu
                                                <span class="mobile-back"><i class="fa fa-angle-left"></i>
                                                    </span>
                                            </div>
                                        </li>
                                        <li class="mega-menu home-menu">
                                            <a href="javascript:void(0)" class="nav-link menu-title">home</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="nav-link menu-title">shop</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="nav-link menu-title">product</a>
                                        </li>
                                        <li class="mega-menu ratio_40">
                                            <a href="javascript:void(0)" class="nav-link menu-title">
                                                <div class="gradient-title">Voxo plus</div>
                                            </a>

                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="nav-link menu-title">pages</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="nav-link menu-title">blog</a>
                                        </li>
                                        <li class="mobile-poster d-flex d-xl-none">
                                            <img src="{{asset('voxo_front/assets/images/pwa.png')}}" class="img-fluid" alt="">
                                            <div class="mobile-contain">
                                                <h5>Enjoy app-like experience</h5>
                                                <p class="font-light">With this Screen option you can use Website
                                                    like an App.</p>
                                                <a href="javascript:void(0)" id="installApp"
                                                   class="btn btn-solid-default btn-spacing w-100">ADD TO
                                                    HOMESCREEN</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <div class="menu-right"  >
                            <ul >
                                <li>
                                    <div class="search-box">
                                        <i data-feather="search"></i>
                                    </div>
                                </li>
                                <li class="onhover-dropdown ">
                                    <div class="cart-media">
                                        <i data-feather="user"></i>
                                    </div>
                                    <div class="onhover-div profile-dropdown">
                                    @if(isset($user))
                                        <ul>
                                            <li>
                                                <a href="{{route('dashboard')}}" class="d-block">{{$user['name']}}</a>
                                            </li>
                                            <li>
                                                <a href="{{route('login')}}" class="d-block">Profile</a>
                                            </li>
                                            <li>
                                                <a href="{{route('logout')}}" class="d-block">Log out</a>
                                            </li>
                                        </ul>
                                    @else
                                        <ul>
                                            <li>
                                                <a href="{{route('login')}}" class="d-block">Login</a>
                                            </li>
                                            <li>
                                                <a href="{{route('register')}}" class="d-block">Register</a>
                                            </li>
                                        </ul>
                                    @endif
                                    </div>
                                </li>
                                <li class="onhover-dropdown wislist-dropdown ">
                                    <div class="cart-media">
                                        <a href="wishlist.html">
                                            <i data-feather="heart"></i>
                                            <span class="label label-theme rounded-pill">5</span>
                                        </a>
                                    </div>
                                    <div class="onhover-div">
                                        <a href="wishlist.html">
                                            <div class="wislist-empty">
                                                <i class="fab fa-gratipay"></i>
                                                <h6 class="mb-1">Your wislist empty !!</h6>
                                                <p class="font-light mb-0">explore more and shortlist items.</p>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li class="onhover-dropdown cart-dropdown " id="frontlistcard">
                                    <div class="onhover-div frontpricecard"  >
                                        <div class="cart-menu">
                                            <div class="cart-title">
                                                <h6>
                                                    <i data-feather="shopping-bag"></i>
                                                    <span class="label label-theme rounded-pill">{{$cartQuantity}}</span>
                                                </h6>
                                                <span class="d-md-none d-block">
                                                        <i class="fas fa-arrow-right back-cart"></i>
                                                    </span>
                                            </div>

                                            <ul class="custom-scroll">
                                                @php $total=0@endphp
                                            @if($carts)
                                                @foreach($carts as $cart)
                                                <li>
                                                    <div class="media ">
                                                        <img src="{{asset('images/'.$cart['product_image'])}}"
                                                             class="img-fluid blur-up lazyload" alt="">
                                                        <div class="media-body">
                                                            <h6>{{$cart['product_name']}}</h6>
                                                            <div class="qty-with-price">
                                                                <span>$.{{number_format($cart['product_price'])}}</span>
                                                                <span>
{{--                                                                    <input type="number" class="form-control" value="{{$cart['product_quantity']}}">--}}
                                                                    <label>
                                                                        {{$cart['product_quantity']}}
                                                                    </label>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn-close d-block d-md-none"
                                                                aria-label="Close">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                    @php  $total += $cart['product_price'] * $cart['product_quantity'] ; @endphp
                                                @endforeach
                                            @endif
                                            </ul>

                                        </div>
                                        <div class="cart-btn">
                                            <h6 class="cart-total"><span class="font-light">Total:</span> $
                                                542.00</h6>
                                            <button onclick="location.href = '{{route('show.cart')}}'" type="button"
                                                    class="btn btn-solid-default btn-block">
                                                Proceed to payment
                                            </button>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-solid-default btn-spacing frontpricecard">
                                        <i data-feather="shopping-cart" class="pe-2"> </i>
                                        <span>$.{{number_format($total)}}</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="search-full">
                                <form action="{{route("searchName")}}" method="get" class="input-group">
                                    <span class="input-group-text">
                                    <button class="btn btn-solid" type="submit">
                                        <i data-feather="search" class="font-light" ></i>
                                    </button>
                                </span>
                                <input type="text" class="form-control search-type" name="searchName" id="searchName" placeholder="Search here..">
                                <span class="input-group-text close-search">
                                    <i data-feather="x" class="font-light"></i>
                                </span>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->

<!-- mobile fix menu start -->
<div class="mobile-menu d-sm-none">
    <ul>
        <li>
            <a href="index.html" class="active">
                <i data-feather="home"></i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" class="toggle-category">
                <i data-feather="align-justify"></i>
                <span>Category</span>
            </a>
        </li>
        <li>
            <a href="cart.html">
                <i data-feather="shopping-bag"></i>
                <span>Cart</span>
            </a>
        </li>
        <li>
            <a href="wishlist.html">
                <i data-feather="heart"></i>
                <span>Wishlist</span>
            </a>
        </li>
        <li>
            <a href="user-dashboard.html">
                <i data-feather="user"></i>
                <span>Account</span>
            </a>
        </li>
    </ul>
</div>
<!-- mobile fix menu end -->



@yield('content')


<!-- footer start -->

<footer class="footer-sm-space">
    <div class="main-footer">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-contact">
                        <div class="brand-logo">
                            <a href="index.html" class="footer-logo">
                                <svg class="svg-icon">
                                    <use class="fill-color" xlink:href="{{asset('voxo_front/assets/svg/icons.svg#logo')}}"></use>
                                </svg>
                                <img src="{{asset('voxo_front/assets/images/logo.png')}}" class="img-fluid blur-up lazyload" alt="logo">
                            </a>
                        </div>
                        <ul class="contact-lists">
                            <li>
                                    <span>
                                        <b>phone:</b>
                                        <span class="font-light"> + 185659635</span>
                                    </span>

                            </li>
                            <li>
                                    <span>
                                        <b>Address:</b>
                                        <span class="font-light"> 1418 Riverwood Drive, Suite 3245
                                            Cottonwood, CA 96052, United States</span>
                                    </span>
                            </li>
                            <li>
                                    <span>
                                        <b>Email:</b>
                                        <span class="font-light"> Voxo123@gmail.com</span>
                                    </span>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="footer-links">
                        <div class="footer-title">
                            <h3>About us</h3>
                        </div>
                        <div class="footer-content">
                            <ul>
                                <li>
                                    <a href="index.html" class="font-dark">Home</a>
                                </li>
                                <li>
                                    <a href="shop-left-sidebar.html" class="font-dark">Shop</a>
                                </li>
                                <li>
                                    <a href="about-us.html" class="font-dark">About Us</a>
                                </li>
                                <li>
                                    <a href="blog-details.html" class="font-dark">Blog</a>
                                </li>
                                <li>
                                    <a href="contact-us.html" class="font-dark">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-links">
                        <div class="footer-title">
                            <h3>New Categories</h3>
                        </div>
                        <div class="footer-content">
                            <ul>
                                <li>
                                    <a href="shop-left-sidebar.html" class="font-dark">Latest Shoes</a>
                                </li>
                                <li>
                                    <a href="shop-left-sidebar.html" class="font-dark">Branded Jeans</a>
                                </li>
                                <li>
                                    <a href="shop-left-sidebar.html" class="font-dark">New Jackets</a>
                                </li>
                                <li>
                                    <a href="shop-left-sidebar.html" class="font-dark">Colorfull Hoodies</a>
                                </li>
                                <li>
                                    <a href="shop-left-sidebar.html" class="font-dark">Shiner Goggles</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-links">
                        <div class="footer-title">
                            <h3>Get Help</h3>
                        </div>
                        <div class="footer-content">
                            <ul>
                                <li>
                                    <a href="user-dashboard.html" class="font-dark">Your Orders</a>
                                </li>
                                <li>
                                    <a href="user-dashboard.html" class="font-dark">Your Account</a>
                                </li>
                                <li>
                                    <a href="order-tracking.html" class="font-dark">Track Orders</a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="font-dark">Your Wishlist</a>
                                </li>
                                <li>
                                    <a href="faq.html" class="font-dark">Shopping FAQs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 d-none d-sm-block">
                    <div class="footer-newsletter">
                        @if(! isset($user))
                        <h3>Let’s stay in touch</h3>
                        <form
                            action="https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda"
                            class="form-newsletter  needs-validation" method="post" id="mc-embedded-subscribe-form"
                            name="mc-embedded-subscribe-form" target="_blank">
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <span class="input-group-text" id="basic-addon4"><a href="{{route('register')}}"><i class="fas fa-arrow-right"></i></a></span>
                            </div>
                            <p class="font-dark mb-0">Keep up to date with our latest news and special offers.
                            </p>
                        </form>
{{--                        @else--}}
{{--                            <h3>Let’s stay in touch</h3>--}}
{{--                            <form--}}
{{--                                action="https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda"--}}
{{--                                class="form-newsletter  needs-validation" method="post" id="mc-embedded-subscribe-form"--}}
{{--                                name="mc-embedded-subscribe-form" target="_blank">--}}
{{--                                <div class="input-group mb-4">--}}
{{--                                    <input type="text" class="form-control" placeholder="Your Email Address">--}}
{{--                                    <span class="input-group-text" id="basic-addon4"><i--}}
{{--                                            class="fas fa-arrow-right"></i></span>--}}
{{--                                </div>--}}
{{--                                <p class="font-dark mb-0">Keep up to date with our latest news and special offers.--}}
{{--                                </p>--}}
{{--                            </form>--}}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row gy-3">
                <div class="col-md-6">
                    <ul>
                        <li class="font-dark">We accept:</li>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="{{asset('voxo_front/assets/images/payment-icon/1.jpg')}}" class="img-fluid blur-up lazyload"
                                     alt="payment icon"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="{{asset('voxo_front/assets/images/payment-icon/2.jpg')}}" class="img-fluid blur-up lazyload"
                                     alt="payment icon"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="{{asset('voxo_front/assets/images/payment-icon/3.jpg')}}" class="img-fluid blur-up lazyload"
                                     alt="payment icon"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="{{asset('voxo_front/assets/images/payment-icon/4.jpg')}}" class="img-fluid blur-up lazyload"
                                     alt="payment icon"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <p class="mb-0 font-dark">© 2022, Voxo Theme. Made with heart by Pixelstrap</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<!-- Cart Successful Start -->
<div class="modal fade cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-label="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="modal-contain">
                    <div>
                        <div class="modal-messages">
                            <i class="fas fa-check"></i> 3-stripes full-zip hoodie successfully added to
                            you cart.
                        </div>
                        <div class="modal-product">
                            <div class="modal-contain-img">
                                <img src="{{asset('voxo_front/assets/images/fashion/instagram/4.jpg')}}" class="img-fluid blur-up lazyload"
                                     alt="">
                            </div>
                            <div class="modal-contain-details">
                                <h4>Premier Cropped Skinny Jean</h4>
                                <p class="font-light my-2">Yellow, Qty : 3</p>
                                <div class="product-total">
                                    <h5>TOTAL : <span>$1,140.00</span></h5>
                                </div>
                                <div class="shop-cart-button mt-3">
                                    <a href="shop-left-sidebar.html"
                                       class="btn default-light-theme conti-button default-theme default-theme-2 rounded">CONTINUE
                                        SHOPPING</a>
                                    <a href="cart.html"
                                       class="btn default-light-theme conti-button default-theme default-theme-2 rounded">VIEW
                                        CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ratio_asos mt-4">
                    <div class="container">
                        <div class="row m-0">
                            <div class="col-sm-12 p-0">
                                <div
                                    class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space spacing-slider">
                                    <div>
                                        <div class="product-box">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-left-sidebar.html">
                                                        <img src="{{asset('voxo_front/assets/images/fashion/product/front/1.jpg')}}"
                                                             class="bg-img blur-up lazyload" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <div class="rating-details d-block text-center">
                                                    <span class="font-light grid-content">B&Y Jacket</span>
                                                </div>
                                                <div class="main-price mt-0 d-block text-center">
                                                    <h3 class="theme-color">$78.00</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="product-box">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-left-sidebar.html">
                                                        <img src="{{asset('voxo_front/assets/images/fashion/product/front/2.jpg')}}"
                                                             class="bg-img blur-up lazyload" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <div class="rating-details d-block text-center">
                                                    <span class="font-light grid-content">B&Y Jacket</span>
                                                </div>
                                                <div class="main-price mt-0 d-block text-center">
                                                    <h3 class="theme-color">$78.00</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="product-box">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-left-sidebar.html">
                                                        <img src="{{asset('voxo_front/assets/images/fashion/product/front/3.jpg')}}"
                                                             class="bg-img blur-up lazyload" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <div class="rating-details d-block text-center">
                                                    <span class="font-light grid-content">B&Y Jacket</span>
                                                </div>
                                                <div class="main-price mt-0 d-block text-center">
                                                    <h3 class="theme-color">$78.00</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="product-box">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-left-sidebar.html">
                                                        <img src="{{asset('voxo_front/assets/images/fashion/product/front/4.jpg')}}"
                                                             class="bg-img blur-up lazyload" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <div class="rating-details d-block text-center">
                                                    <span class="font-light grid-content">B&Y Jacket</span>
                                                </div>
                                                <div class="main-price mt-0 d-block text-center">
                                                    <h3 class="theme-color">$78.00</h3>
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
        </div>
    </div>
</div>
<!-- Cart Successful End -->

<!-- Quick view modal start -->
<div class="modal fade quick-view-modal" id="quick-view">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="quick-view-image">
                            <div class="quick-view-slider ratio_2">
                                <div>
                                    <img src="{{asset('voxo_front/assets/images/fashion/product/front/4.jpg')}}"
                                         class="img-fluid bg-img blur-up lazyload" alt="product">
                                </div>
                                {{--                                                        <div>--}}
                                {{--                                                            <img src="{{asset('voxo_front/assets/images/fashion/product/front/5.jpg')}}"--}}
                                {{--                                                                 class="img-fluid bg-img blur-up lazyload" alt="product">--}}
                                {{--                                                        </div>--}}
                                {{--                                                        <div>--}}
                                {{--                                                            <img src="{{asset('voxo_front/assets/images/fashion/product/front/6.jpg')}}"--}}
                                {{--                                                                 class="img-fluid bg-img blur-up lazyload" alt="product">--}}
                                {{--                                                        </div>--}}
                                {{--                                                        <div>--}}
                                {{--                                                            <img src="{{asset('voxo_front/assets/images/fashion/product/front/7.jpg')}}"--}}
                                {{--                                                                 class="img-fluid bg-img blur-up lazyload" alt="product">--}}
                                {{--                                                        </div>--}}
                            </div>
                            <div class="quick-nav">
                                {{--                                                        <div>--}}
                                {{--                                                            <img src="{{asset('voxo_front/assets/images/fashion/product/front/4.jpg')}}"--}}
                                {{--                                                                 class="img-fluid blur-up lazyload" alt="product">--}}
                                {{--                                                        </div>--}}
                                {{--                                                        <div>--}}
                                {{--                                                            <img src="{{asset('voxo_front/assets/images/fashion/product/front/5.jpg')}}"--}}
                                {{--                                                                 class="img-fluid blur-up lazyload" alt="product">--}}
                                {{--                                                        </div>--}}
                                {{--                                                        <div>--}}
                                {{--                                                            <img src="{{asset('voxo_front/assets/images/fashion/product/front/6.jpg')}}"--}}
                                {{--                                                                 class="img-fluid blur-up lazyload" alt="product">--}}
                                {{--                                                        </div>--}}
                                {{--                                                        <div>--}}
                                {{--                                                            <img src="{{asset('voxo_front/assets/images/fashion/product/front/7.jpg')}}"--}}
                                {{--                                                                 class="img-fluid blur-up lazyload" alt="product">--}}
                                {{--                                                        </div>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-right">
                            <h2 class="mb-2">Shirt</h2>
                            <ul class="rating mt-1">
                                <li>
                                    <i class="fas fa-star theme-color"></i>
                                </li>
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
                                <li class="font-light">(In stock)</li>
                            </ul>
                            <div class="price mt-3">
                                <h3>$20.00</h3>
                            </div>
                            <div class="color-types">
                                <h4>colors</h4>
                                <ul class="color-variant mb-0">
                                    <li class="bg-half-light selected"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-blue1"></li>
                                    <li class="bg-black1"></li>
                                </ul>
                            </div>
                            <div class="size-detail">
                                <h4>size</h4>
                                <ul class="">
                                    <li class="selected">S</li>
                                    <li>M</li>
                                    <li>L</li>
                                    <li>XL</li>
                                </ul>
                            </div>
                            <div class="product-details">
                                <h4>product details</h4>
                                <ul>
                                    <li>
                                        <span class="font-light">Style :</span> Hoodie
                                    </li>
                                    <li>
                                        <span class="font-light">Catgory :</span> T-shirt
                                    </li>
                                    <li>
                                        <span class="font-light">Tags:</span> summer, organic
                                    </li>
                                </ul>
                            </div>
                            <div class="product-btns">
                                <a href="cart.html" class="btn btn-solid-default btn-sm">Add to cart</a>
                                <a href="product-left-sidebar.html" class="btn btn-solid-default btn-sm">View
                                    details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick view modal end -->

<!-- Newsletter modal start -->
<div class="modal fade newletter-modal" id="newsletter">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <img src="{{asset('voxo_front/assets/images/newletter-icon.png')}}" class="img-fluid blur-up lazyload" alt="">
                <div class="modal-title">
                    <h2 class="tt-title">Sign up for our Newsletter!</h2>
                    <p class="font-light">Never miss any new updates or products we reveal, stay up to date.</p>
                    <p class="font-light">Oh, and it's free!</p>

                    <div class="input-group mb-3">
                        <input placeholder="Email" class="form-control" type="text">
                    </div>

                    <div class="cancel-button text-center">
                        <button class="btn default-theme w-100" data-bs-dismiss="modal"
                                type="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter modal end -->

{{--<!-- Coockie Section Start -->--}}
{{--<div class="cookie-bar-section">--}}
{{--    <img src="{{asset('voxo_front/assets/images/cookie.png')}}" alt="">--}}
{{--    <div class="content">--}}
{{--        <h3>Cookies Consent</h3>--}}
{{--        <p class="font-light">This website use cookies to ensure you get the best experience on our website.</p>--}}
{{--        <div class="cookie-buttons">--}}
{{--            <button class="btn btn-solid-default" id="button">I understand</button>--}}
{{--            <a href="javascript:void(0)" class="btn default-light1">Learn more</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Coockie Section End -->

<!-- tap to top Section Start -->
<div class="tap-to-top">
    <a href="#home">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>
<!-- tap to top Section End -->

<div class="bg-overlay"></div>

<!-- latest jquery-->
<script src="{{asset('voxo_front/assets/js/jquery-3.5.1.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('voxo_front/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>

<!-- feather icon js-->
<script src="{{asset('voxo_front/assets/js/feather/feather.min.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('voxo_front/assets/js/lazysizes.min.js')}}"></script>

<!-- Slick js-->
<script src="{{asset('voxo_front/assets/js/slick/slick.js')}}"></script>
<script src="{{asset('voxo_front/assets/js/slick/slick-animation.min.js')}}"></script>
<script src="{{asset('voxo_front/assets/js/slick/custom_slick.js')}}"></script>

<!-- newsletter js -->
<script src="{{asset('voxo_front/assets/js/newsletter.js')}}"></script>

<!-- add to cart modal resize -->
<script src="{{asset('voxo_front/assets/js/cart_modal_resize.js')}}"></script>

<!-- Add To Home js -->
<script src="{{asset('voxo_front/assets/js/pwa.js')}}"></script>

<!-- add to cart modal resize -->
<script src="{{asset('voxo_front/assets/js/cart_modal_resize.js')}}"></script>

<!-- feather icon js-->
<script src="{{asset('voxo_front/assets/js/timer1.js')}}"></script>

<!-- notify js -->
<script src="{{asset('voxo_front/assets/js/bootstrap/bootstrap-notify.min.js')}}"></script>

<!-- script js -->
<script src="{{asset('voxo_front/assets/js/theme-setting.js')}}"></script>
<script src="{{asset('voxo_front/assets/js/script.js')}}"></script>

{{--<script>--}}
{{--    function searchName(){--}}
{{--        var name = $('#searchName').val();--}}
{{--        $.get("{{route('searchProductName')}}", {'name' : name}, function (){--}}
{{--            alert('check');--}}
{{--        });--}}
{{--    }--}}
{{--</script>--}}

</body>

<!-- Mirrored from themes.pixelstrap.com/voxo/front-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Jul 2022 15:21:03 GMT -->
</html>
