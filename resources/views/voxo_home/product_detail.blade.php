
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
{{--                                    <ul>--}}
{{--                                        <li>--}}
{{--                                            <img src="{{asset('voxo_front/assets/images/gif/fire.gif')}}" class="img-fluid blur-up lazyload"--}}
{{--                                                 alt="image">--}}
{{--                                            <span class="p-counter">37</span>--}}
{{--                                            <span class="lang">orders in last 24 hours</span>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <img src="{{asset('voxo_front/assets/images/gif/person.gif')}}" class="img-fluid user_img"--}}
{{--                                                 alt="image">--}}
{{--                                            <span class="p-counter">44</span>--}}
{{--                                            <span class="lang">active view this</span>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
                                </div>

                                <div class="details-image-concept">
                                    <h2>{{$product->name}}</h2>
                                </div>

                                <div class="label-section">
                                    <span class="badge badge-grey-color">#1 Best seller</span>
                                    <span class="label-text">in fashion</span>
                                </div>

                                <h3 class="price-detail">${{$product->price}} <del>$459.00</del><span>55% off</span></h3>

                                <div class="color-image">
                                    <div class="image-select">
                                        <h5>Color :</h5>
                                        <ul class="image-section">
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <img src="{{asset('voxo_front/assets/images/fashion/product/front/5.jpg')}}"
                                                         class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <img src="{{asset('voxo_front/assets/images/fashion/product/front/6.jpg')}}"
                                                         class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <img src="{{asset('voxo_front/assets/images/fashion/product/front/7.jpg')}}"
                                                         class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                            </li>
                                        </ul>
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

                                    <h6 class="product-title product-title-2 d-block">quantity</h6>

                                    <div class="qty-box">
                                        <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </span>
                                            <input type="text" name="quantity" class="form-control input-number pr_quantity"  value="1" min="1">
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
                                    <a href="wishlist.html" class="btn btn-solid">
                                        <i class="fa fa-bookmark fz-16 me-2"></i>
                                        <span>Wishlist</span>
                                    </a>
{{--                                    <a href="javascript:void(0)" id="cartEffect"--}}
{{--                                       class="btn btn-solid hover-solid btn-animation">--}}
{{--                                        <i class="fa fa-shopping-cart"></i>--}}
{{--                                        <span>Add To Cart</span>--}}
{{--                                    </a>--}}
                                    <button type="submit" class="btn btn-solid" onclick="addCart({{$product->id}})">
                                        <i class="fa fa-shopping-cart"></i>Add To Cart
                                    </button>
                                </div>

                                <ul class="product-count shipping-order">
                                    <li>
                                        <img src="{{asset('voxo_front/assets/images/gif/truck.png')}}" class="img-fluid blur-up lazyload"
                                             alt="image">
                                        <span class="lang">Free shipping for orders above $500 USD</span>
                                    </li>
                                </ul>

                                <div class="mt-2 mt-md-3 border-product">
                                    <h6 class="product-title hurry-title d-block">Hurry Up! Left <span>10</span>
                                        in
                                        stock</h6>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 78%"></div>
                                    </div>
                                    <div class="font-light timer-5">
                                        <h5>Order in the next to get</h5>
                                        <ul class="timer1">
                                            <li class="counter">
                                                <h5 id="days">&#9251;</h5> Days :
                                            </li>
                                            <li class="counter">
                                                <h5 id="hours">&#9251;</h5> Hour :
                                            </li>
                                            <li class="counter">
                                                <h5 id="minutes">&#9251;</h5> Min :
                                            </li>
                                            <li class="counter">
                                                <h5 id="seconds">&#9251;</h5> Sec
                                            </li>
                                        </ul>
                                    </div>
                                </div>

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

                            <button class="nav-link" id="nav-speci-tab" data-bs-toggle="tab" data-bs-target="#speci"
                                    type="button">Specifications</button>

                            <button class="nav-link" id="nav-size-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-guide" type="button">Sizing Guide</button>

                            <button class="nav-link" id="nav-question-tab" data-bs-toggle="tab"
                                    data-bs-target="#question" type="button">Q & A</button>

                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#review" type="button">Review</button>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="desc">
                            <div class="shipping-chart">
                                <div class="part">
                                    <h4 class="inner-title mb-2">Give you a complete account of the system</h4>
                                    <p class="font-light">Nor again is there anyone who loves or pursues or
                                        desires
                                        to
                                        obtain pain of itself, because it is pain, but because occasionally
                                        circumstances occur in which toil and pain can procure him some great
                                        pleasure.
                                        To take a trivial example, which of us ever undertakes laborious
                                        physical
                                        exercise, except to obtain some advantage from it? But who has any right
                                        to
                                        find
                                        fault with a man who chooses to enjoy a pleasure that has no annoying
                                        consequences, or one who avoids a pain that produces no resultant
                                        pleasure.
                                    </p>
                                </div>

                                <div class="row g-3 align-items-center">
                                    <div class="col-lg-8">
                                        <p class="font-light">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit.
                                            Ab, autem nemo? Tempora vitae assumenda laudantium unde magni,
                                            soluta
                                            repudiandae quam, neque voluptate deleniti consequatur laboriosam
                                            veritatis?
                                            Tempore dolor molestias voluptatum! Minima possimus, pariatur sed,
                                            quasi
                                            provident dolorum unde molestias, assumenda consequuntur odit magni
                                            blanditiis obcaecati? Ea corporis odit dolorem fuga, fugiat soluta
                                            consequuntur magni.</p>

                                        <div class="part mt-3">
                                            <h5 class="inner-title mb-2">fabric:</h5>
                                            <p class="font-light">Art silk is manufactured by synthetic fibres
                                                like
                                                rayon. It's light in weight and is soft on the skin for comfort
                                                in
                                                summers.Art silk is manufactured by synthetic fibres like rayon.
                                                It's
                                                light in weight and is soft on the skin for comfort in summers.
                                            </p>
                                            <p class="font-light">Lorem Ipsum is simply dummy text of the
                                                printing
                                                and typesetting industry. Lorem Ipsum has been the industry's
                                                standard dummy text ever since the 1500s</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <img src="{{asset('voxo_front/assets/images/fashion/slider/1.jpg')}}"
                                             class="img-fluid rounded blur-up lazyload" alt="">
                                    </div>

                                    <div class="col-lg-8 order-lg-2 mt-4">
                                        <p class="font-light">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit.
                                            Ab, autem nemo? Tempora vitae assumenda laudantium unde magni,
                                            soluta
                                            repudiandae quam, neque voluptate deleniti consequatur laboriosam
                                            veritatis?
                                            Tempore dolor molestias voluptatum! Minima possimus, pariatur sed,
                                            quasi
                                            provident dolorum unde molestias, assumenda consequuntur odit magni
                                            blanditiis obcaecati? Ea corporis odit dolorem fuga, fugiat soluta
                                            consequuntur magni.</p>
                                        <div class="part mt-3">
                                            <p class="font-light">Lorem ipsum, dolor sit amet consectetur
                                                adipisicing
                                                elit. Odio repellat numquam perspiciatis eum quis ab, sed dicta
                                                tenetur
                                                fugit culpa, aut distinctio deserunt quisquam ipsam
                                                reprehenderit
                                                iure?
                                                Adipisci, optio enim? Voluptates voluptatum neque id ad commodi
                                                quisquam
                                                dolorem vitae inventore quasi! Officiis facere, iusto tempore
                                                atque
                                                magnam voluptas. Architecto laboriosam deleniti hic veritatis
                                                nesciunt.
                                                Aut officia quasi inventore et. Debitis.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 order-lg-0 mt-4">
                                        <img src="{{asset('voxo_front/assets/images/fashion/slider/2.jpg')}}"
                                             class="img-fluid rounded blur-up lazyload" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="speci">
                            <div class="pro mb-4">
                                <p class="font-light">The Model is wearing a white blouse from our stylist's
                                    collection, see the image for a mock-up of what the actual blouse would look
                                    like.it has text written on it in a black cursive language which looks great
                                    on a white color.</p>
                                <div class="table-responsive">
                                    <table class="table table-part">
                                        <tr>
                                            <th>Product Dimensions</th>
                                            <td>15 x 15 x 3 cm; 250 Grams</td>
                                        </tr>
                                        <tr>
                                            <th>Date First Available</th>
                                            <td>5 April 2021</td>
                                        </tr>
                                        <tr>
                                            <th>Manufacturer‏</th>
                                            <td>Aditya Birla Fashion and Retail Limited</td>
                                        </tr>
                                        <tr>
                                            <th>ASIN</th>
                                            <td>B06Y28LCDN</td>
                                        </tr>
                                        <tr>
                                            <th>Item model number</th>
                                            <td>AMKP317G04244</td>
                                        </tr>
                                        <tr>
                                            <th>Department</th>
                                            <td>Men</td>
                                        </tr>
                                        <tr>
                                            <th>Item Weight</th>
                                            <td>250 G</td>
                                        </tr>
                                        <tr>
                                            <th>Item Dimensions LxWxH</th>
                                            <td>15 x 15 x 3 Centimeters</td>
                                        </tr>
                                        <tr>
                                            <th>Net Quantity</th>
                                            <td>1 U</td>
                                        </tr>
                                        <tr>
                                            <th>Included Components‏</th>
                                            <td>1-T-shirt</td>
                                        </tr>
                                        <tr>
                                            <th>Generic Name</th>
                                            <td>T-shirt</td>
                                        </tr>
                                    </table>
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

                        <div class="tab-pane fade" id="question">
                            <div class="question-answer">
                                <ul>
                                    <li>
                                        <div class="que">
                                            <i class="fas fa-question"></i>
                                            <div class="que-details">
                                                <h6>Is it compatible with all WordPress themes?</h6>
                                                <p class="font-light">If you want to see a demonstration version of
                                                    the premium plugin, you can see that in this page. If you want
                                                    to see a demonstration version of the premium plugin, you can
                                                    see that in this page. If you want to see a demonstration
                                                    version of the premium plugin, you can see that in this page.
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="que">
                                            <i class="fas fa-question"></i>
                                            <div class="que-details">
                                                <h6>How can I try the full-featured plugin? </h6>
                                                <p class="font-light">Compatibility with all themes is impossible,
                                                    because they are too many, but generally if themes are developed
                                                    according to WordPress and WooCommerce guidelines, YITH plugins
                                                    are compatible with them. Compatibility with all themes is
                                                    impossible, because they are too many, but generally if themes
                                                    are developed according to WordPress and WooCommerce guidelines,
                                                    YITH plugins are compatible with them.</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="que">
                                            <i class="fas fa-question"></i>
                                            <div class="que-details">
                                                <h6>Is it compatible with all WordPress themes?</h6>
                                                <p class="font-light">If you want to see a demonstration version of
                                                    the premium plugin, you can see that in this page. If you want
                                                    to see a demonstration version of the premium plugin, you can
                                                    see that in this page. If you want to see a demonstration
                                                    version of the premium plugin, you can see that in this page.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="review">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="customer-rating">
                                        <h2>Customer reviews</h2>
                                        <ul class="rating my-2 d-inline-block">
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
                                        </ul>

                                        <div class="global-rating">
                                            <h5 class="font-light">82 Ratings</h5>
                                        </div>

                                        <ul class="rating-progess">
                                            <li>
                                                <h5 class="me-3">5 Star</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 78%"
                                                         aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <h5 class="ms-3">78%</h5>
                                            </li>
                                            <li>
                                                <h5 class="me-3">4 Star</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 62%"
                                                         aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <h5 class="ms-3">62%</h5>
                                            </li>
                                            <li>
                                                <h5 class="me-3">3 Star</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 44%"
                                                         aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <h5 class="ms-3">44%</h5>
                                            </li>
                                            <li>
                                                <h5 class="me-3">2 Star</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 30%"
                                                         aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <h5 class="ms-3">30%</h5>
                                            </li>
                                            <li>
                                                <h5 class="me-3">1 Star</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 18%"
                                                         aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <h5 class="ms-3">18%</h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <p class="d-inline-block me-2">Rating</p>
                                    <ul class="rating mb-3 d-inline-block">
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
                                    </ul>
                                    <div class="review-box">
                                        <form class="row g-4">
                                            <div class="col-12 col-md-6">
                                                <label class="mb-1" for="name">Name</label>
                                                <input type="text" class="form-control" id="name"
                                                       placeholder="Enter your name" required>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <label class="mb-1" for="id">Email Address</label>
                                                <input type="email" class="form-control" id="id"
                                                       placeholder="Email Address" required>
                                            </div>

                                            <div class="col-12">
                                                <label class="mb-1" for="comments">Comments</label>
                                                <textarea class="form-control" placeholder="Leave a comment here"
                                                          id="comments" style="height: 100px" required></textarea>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit"
                                                        class="btn default-light-theme default-theme default-theme-2">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-12 mt-4">
                                    <div class="customer-review-box">
                                        <h4>Customer Reviews</h4>

                                        <div class="customer-section">
                                            <div class="customer-profile">
                                                <img src="{{asset('voxo_front/assets/images/inner-page/review-image/1.jpg')}}"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </div>

                                            <div class="customer-details">
                                                <h5>Mike K</h5>
                                                <ul class="rating my-2 d-inline-block">
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
                                                </ul>
                                                <p class="font-light">I purchased my Tab S2 at Best Buy but I
                                                    wanted
                                                    to
                                                    share my thoughts on Amazon. I'm not going to go over specs
                                                    and
                                                    such
                                                    since you can read those in a hundred other places. Though I
                                                    will
                                                    say that the "new" version is preloaded with Marshmallow and
                                                    now
                                                    uses a Qualcomm octacore processor in place of the Exynos
                                                    that
                                                    shipped with the first gen.</p>

                                                <p class="date-custo font-light">- Sep 08, 2021</p>
                                            </div>
                                        </div>

                                        <div class="customer-section">
                                            <div class="customer-profile">
                                                <img src="{{asset('voxo_front/assets/images/inner-page/review-image/2.jpg')}}"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </div>

                                            <div class="customer-details">
                                                <h5>Norwalker</h5>
                                                <ul class="rating my-2 d-inline-block">
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
                                                </ul>
                                                <p class="font-light">Pros: Nice large(9.7") screen. Bright
                                                    colors.
                                                    Easy
                                                    to setup and get started. Arrived on time. Cons: a bit slow
                                                    on
                                                    response, but expected as tablet is 2 generations old. But
                                                    works
                                                    fine and good value for the money.</p>

                                                <p class="date-custo font-light">- Sep 08, 2021</p>
                                            </div>
                                        </div>

                                        <div class="customer-section">
                                            <div class="customer-profile">
                                                <img src="{{asset('voxo_front/assets/images/inner-page/review-image/3.jpg')}}"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </div>

                                            <div class="customer-details">
                                                <h5>B. Perdue</h5>
                                                <ul class="rating my-2 d-inline-block">
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
                                                </ul>
                                                <p class="font-light">Love the processor speed and the
                                                    sensitivity
                                                    of
                                                    the touch screen.</p>

                                                <p class="date-custo font-light">- Sep 08, 2021</p>
                                            </div>
                                        </div>

                                        <div class="customer-section">
                                            <div class="customer-profile">
                                                <img src="{{asset('voxo_front/assets/images/inner-page/review-image/4.jpg')}}"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </div>

                                            <div class="customer-details">
                                                <h5>MSL</h5>
                                                <ul class="rating my-2 d-inline-block">
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
                                                </ul>
                                                <p class="font-light">I purchased the Tablet May 2017 and now
                                                    April
                                                    2019
                                                    I have to charge it everyday. I don't watch movies on
                                                    it..just
                                                    play
                                                    a game or two while on lunch. I guess now I need to power it
                                                    down
                                                    for future use.</p>

                                                <p class="date-custo font-light">- Sep 08, 2021</p>
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
</section>
<!-- Shop Section end -->

<!-- product section start -->
<section class="ratio_asos section-b-space overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-lg-4 mb-3">Customers Also Bought These</h2>
                <div class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space">
                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('voxo_front/assets/images/fashion/product/front/1.jpg')}}"
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
                                               data-bs-target="#quick-view">
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
                                    <span class="font-light grid-content">B&Y Jacket</span>
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
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Slim Fit Plastic Coat</h5>
                                    </a>
                                    <div class="listing-content">
                                        <span class="font-light">Regular Fit</span>
                                        <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                            elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                            ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                            qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                            accusantium architecto placeat quam officia, tempore repellendus.</p>
                                    </div>
                                    <h3 class="theme-color">$78.00</h3>
                                    <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                        To Cart</button>
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
                                <div class="back">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('voxo_front/assets/images/fashion/product/back/2.jpg')}}"
                                             class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="label-block">
                                    <span class="label label-black">New</span>
                                    <span class="label label-theme">50% Off</span>
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
                                               data-bs-target="#quick-view">
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
                                    <span class="font-light grid-content">Jacket</span>
                                    <ul class="rating mt-0">
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
                                    </ul>
                                </div>
                                <div class="main-price">
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Blue Leather Jacket</h5>
                                    </a>
                                    <div class="listing-content">
                                        <span class="font-light">Regular Fit</span>
                                        <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                            elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                            ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                            qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                            accusantium architecto placeat quam officia, tempore repellendus.</p>
                                    </div>
                                    <h3 class="theme-color">$60.00</h3>
                                    <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                        To Cart</button>
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
                                <div class="back">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('voxo_front/assets/images/fashion/product/back/3.jpg')}}"
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
                                               data-bs-target="#quick-view">
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
                                    <span class="font-light grid-content">Dress</span>
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
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Military Ball Night Dress</h5>
                                    </a>
                                    <div class="listing-content">
                                        <span class="font-light">Regular Fit</span>
                                        <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                            elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                            ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                            qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                            accusantium architecto placeat quam officia, tempore repellendus.</p>
                                    </div>
                                    <h3 class="theme-color">$85.00</h3>
                                    <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                        To Cart</button>
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
                                <div class="back">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('voxo_front/assets/images/fashion/product/back/4.jpg')}}"
                                             class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="label-block">
                                    <span class="label label-black">New</span>
                                    <span class="label label-theme">50% Off</span>
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
                                               data-bs-target="#quick-view">
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
                                    <span class="font-light grid-content">Jacket</span>
                                    <ul class="rating mt-0">
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
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-price">
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Full Slive Yellow Jacket</h5>
                                    </a>
                                    <div class="listing-content">
                                        <span class="font-light">Regular Fit</span>
                                        <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                            elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                            ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                            qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                            accusantium architecto placeat quam officia, tempore repellendus.</p>
                                    </div>
                                    <h3 class="theme-color">$69.00</h3>
                                    <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                        To Cart</button>
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
                                <div class="back">
                                    <a href="product-left-sidebar.html">
                                        <img src="{{asset('voxo_front/assets/images/fashion/product/back/2.jpg')}}"
                                             class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="label-block">
                                    <span class="label label-black">New</span>
                                    <span class="label label-theme">50% Off</span>
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
                                               data-bs-target="#quick-view">
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
                                    <span class="font-light grid-content">Jacket</span>
                                    <ul class="rating mt-0">
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
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-price">
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Blue Leather Jacket</h5>
                                    </a>
                                    <div class="listing-content">
                                        <span class="font-light">Regular Fit</span>
                                        <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                            elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                            ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                            qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                            accusantium architecto placeat quam officia, tempore repellendus.</p>
                                    </div>
                                    <h3 class="theme-color">$60.00</h3>
                                    <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                        To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product section end -->

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



<!-- sticky cart bottom start -->
{{--<div class="sticky-bottom-cart">--}}
{{--    <div class="container">--}}
{{--        <div class="cart-content">--}}
{{--            <div class="product-image">--}}
{{--                <img src="{{asset('voxo_front/assets/images/fashion/instagram/1.jpg')}}" class="img-fluid blur-up lazyload" alt="">--}}
{{--                <div class="content">--}}
{{--                    <h5>men yellow jacket</h5>--}}
{{--                    <h6>$32.96<del class="font-light">$459.00</del><span>55% off</span></h6>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="selection-section">--}}
{{--                <div class="form-group mb-0">--}}
{{--                    <select id="inputState" class="form-control form-select">--}}
{{--                        <option disabled selected>Choose color...</option>--}}
{{--                        <option>Pink</option>--}}
{{--                        <option>Blue</option>--}}
{{--                        <option>Grey</option>--}}
{{--                        <option>Pink</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="form-group mb-0">--}}
{{--                    <select id="input-state" class="form-control form-select">--}}
{{--                        <option selected disabled>Choose size...</option>--}}
{{--                        <option>Small</option>--}}
{{--                        <option>Medium</option>--}}
{{--                        <option>Large</option>--}}
{{--                        <option>Extra Large</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="add-btn">--}}
{{--                <a class="btn default-light-theme default-theme default-theme-2 outline-button wishlist-btn"--}}
{{--                   href="wishlist.html"><i class="fa fa-bookmark"></i> Wishlist</a>--}}
{{--                <a class="btn default-light-theme default-theme default-theme-2 outline-button" href="cart.html"><i--}}
{{--                        class="fas fa-shopping-cart"></i> Add To Cart</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- sticky cart bottom end -->

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

<!-- Add To Cart Notification -->
<div class="added-notification">
    <img src="voxo_front/assets/images/fashion/banner/2.jpg" class="img-fluid blur-up lazyload" alt="">
    <h3>added to cart</h3>
</div>
<!-- Add To Cart Notification -->


<script>
    function addCart(id) {
        var size = $('.pr_size').val();
        var quantity = $('.pr_quantity').val();

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
                    {{--$.get("{{route('delete.cart', {'id' : id})}}")--}}
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
</script>

@endsection



