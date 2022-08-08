@extends('layouts.site_vegist')

@section('content')
<!-- breadcrumb start -->
<section class="about-breadcrumb">
    <div class="about-back section-tb-padding" style="background-image: url(vegist/image/about-image.jpg)">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about-l">
                        <ul class="about-link">
                            <li class="go-home"><a href="index1.html">Home</a></li>
                            <li class="about-p"><span>Profile</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->
<!-- order history start -->
<section class="order-histry-area section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="order-history">
                    <div class="profile">
                        <div class="order-pro">
                            <div class="pro-img">
                                <a href="javascript:void(0)"><img src="{{asset('vegist/image/user-ava.jpg')}}" alt="img" class="img-fluid"></a>
                            </div>
                            <div class="order-name">
                                <h4>{{$user['name']}}</h4>
                                <span>Joined: {{$user['created_at']}}</span>
                            </div>
                        </div>
                        <div class="order-his-page">
                            <ul class="profile-ul">
                                <li class="profile-li"><a href="order-history.html"><span>Orders</span> <span class="pro-count">5</span></a></li>
                                <li class="profile-li"><a href="profile.html" class="active">Profile</a></li>
                                <li class="profile-li"><a href="pro-addresses.html">Address</a></li>
                                <li class="profile-li"><a href="pro-wishlist.html"><span>Wishlist</span> <span class="pro-count">3</span></a></li>
                                <li class="profile-li"><a href="pro-tickets.html"><span>My tickets</span> <span class="pro-count">4</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="profile-form">
                        @csrf
                        <form method="post">
                            <ul class="pro-input-label">
                                <li>
                                    <label>Fullname</label>
                                    <input type="text" name="name" value="{{$user['name']}}">
                                </li>
                                <li>
                                    <label>Phone</label>
                                    <input type="text" name="phone" value="{{$user['phone']}}">
                                </li>
                            </ul>
                            <ul class="pro-input-label">
                                <li>
                                    <label>E-mail</label>
                                    <input type="text" name="email" value="{{$user['email']}}">
                                </li>
                                <li>
                                    <label>Address</label>
                                    <input type="text" name="address" value="{{$user['address']}}">
                                </li>
                            </ul>
                            <ul class="pro-input-label">
                                <li>
                                    <label>New password</label>
                                    <input type="text" name="name" placeholder="New password">
                                </li>
                                <li>
                                    <label>Confirm password</label>
                                    <input type="text" name="name" placeholder="Confirm password">
                                </li>
                            </ul>
                            <ul class="pro-submit">
                                <li>
                                    <input type="checkbox" name="name">
                                    <label>Subscribe me to newsletter</label>
                                </li>
                                <li>
                                    <a href="profile.html" class="btn btn-style1">Update profile</a>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- order history end -->
<!-- footer start -->
<section class="footer-one section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="footer-service section-b-padding">
                    <ul class="service-ul">
                        <li class="service-li">
                            <a href="javascript:void(0)"><i class="fa fa-truck"></i></a>
                            <span>Free delivery</span>
                        </li>
                        <li class="service-li">
                            <a href="javascript:void(0)"><i class="fa fa-rupee"></i></a>
                            <span>Cash on delivery</span>
                        </li>
                        <li class="service-li">
                            <a href="javascript:void(0)"><i class="fa fa-refresh"></i></a>
                            <span>30 Days returns</span>
                        </li>
                        <li class="service-li">
                            <a href="javascript:void(0)"><i class="fa fa-headphones"></i></a>
                            <span>Online support</span>
                        </li>
                    </ul>
                </div>
                <div class="f-logo">
                    <ul class="footer-ul">
                        <li class="footer-li footer-logo">
                            <a href="index1.html">
                                <img class="img-fluid" src="image/logo1.png" alt="">
                            </a>
                        </li>
                        <li class="footer-li footer-address">
                            <ul class="f-ul-li-ul">
                                <li class="footer-icon">
                                    <i class="ion-ios-location"></i>
                                </li>
                                <li class="footer-info">
                                    <h6>Address</h6>
                                    <span>401 Broadway 24th floor
</span>
                                    <span>Near ant mall cross road</span>
                                </li>
                            </ul>
                        </li>
                        <li class="footer-li footer-contact">
                            <ul class="f-ul-li-ul">
                                <li class="footer-icon">
                                    <i class="ion-ios-telephone"></i>
                                </li>
                                <li class="footer-info">
                                    <h6>Contact</h6>
                                    <a href="tel:1-800-222-000">Phone: 1-800-222-000</a>
                                    <a href="mailto:demo@demo.com">Email: demo@demo.com</a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer-li footer-address">
                            <ul class="f-ul-li-ul">
                                <li class="footer-icon">
                                    <i class="ion-ios-help"></i>
                                </li>
                                <li class="footer-info">
                                    <h6>Help</h6>
                                    <span>Lorem ipsum is simply</span>
                                    <span>Dummy the printing</span>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="footer-bottom section-t-padding">
                    <div class="footer-link" id="footer-accordian">
                        <div class="f-link">
                            <h2 class="h-footer">Top categories</h2>
                            <a href="#t-cate" data-bs-toggle="collapse" class="h-footer">
                                <span>Top categories</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="f-link-ul collapse" id="t-cate" data-bs-parent="#footer-accordian">
                                <li class="f-link-ul-li"><a href="grid-list.html">Fruits</a></li>
                                <li class="f-link-ul-li"><a href="grid-list.html">Fast foods</a></li>
                                <li class="f-link-ul-li"><a href="grid-list.html">Vegetable</a></li>
                                <li class="f-link-ul-li"><a href="grid-list.html">Salads</a></li>
                                <li class="f-link-ul-li"><a href="grid-list.html">Bestseller</a></li>
                            </ul>
                        </div>
                        <div class="f-link">
                            <h2 class="h-footer">Services</h2>
                            <a href="#services" data-bs-toggle="collapse" class="h-footer">
                                <span>Services</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="f-link-ul collapse" id="services" data-bs-parent="#footer-accordian">
                                <li class="f-link-ul-li"><a href="about-us.html">About vegist</a></li>
                                <li class="f-link-ul-li"><a href="faq%27s.html">Faq's</a></li>
                                <li class="f-link-ul-li"><a href="contact.html">Contact us</a></li>
                                <li class="f-link-ul-li"><a href="blog-style-1-3-grid.html">News</a></li>
                                <li class="f-link-ul-li"><a href="sitemap.html">Sitemap</a></li>
                            </ul>
                        </div>
                        <div class="f-link">
                            <h2 class="h-footer">Privacy & terms</h2>
                            <a href="#privacy" data-bs-toggle="collapse" class="h-footer">
                                <span>Privacy & terms</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="f-link-ul collapse" id="privacy" data-bs-parent="#footer-accordian">
                                <li class="f-link-ul-li"><a href="payment-policy.html">Payment policy</a></li>
                                <li class="f-link-ul-li"><a href="privacy-policy.html">Privacy policy</a></li>
                                <li class="f-link-ul-li"><a href="return-policy.html">Return policy</a></li>
                                <li class="f-link-ul-li"><a href="shipping-policy.html">Shipping policy</a></li>
                                <li class="f-link-ul-li"><a href="terms-conditions.html">Terms & conditions</a></li>
                            </ul>
                        </div>
                        <div class="f-link">
                            <h2 class="h-footer">My account</h2>
                            <a href="#account" data-bs-toggle="collapse" class="h-footer">
                                <span>My account</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="f-link-ul collapse" id="account" data-bs-parent="#footer-accordian">
                                <li class="f-link-ul-li"><a href="account.html">My account</a></li>
                                <li class="f-link-ul-li"><a href="cart.html">My cart</a></li>
                                <li class="f-link-ul-li"><a href="tracking.html">Order history</a></li>
                                <li class="f-link-ul-li"><a href="wishlist.html">My wishlist</a></li>
                                <li class="f-link-ul-li"><a href="addresses.html">My address</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
