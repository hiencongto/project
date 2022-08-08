@extends('layouts.front_voxo')

@section('content')
{{--    @php--}}
{{--        foreach ($orderDetails as $orderDetail)--}}
{{--            {--}}
{{--                print_r($orderDetail[] );--}}
{{--            }--}}
{{--        dd();--}}
{{--    @endphp--}}
{{--{{dd($orderDetails[20])}}--}}
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
    @php $count = count($orders) @endphp
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Account</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li>Account</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb section end -->

<!-- user dashboard section start -->
<section class="section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <ul class="nav nav-tabs custome-nav-tabs flex-column category-option" id="myTab">
                    <li class="nav-item mb-2">
                        <button class="nav-link font-light active" id="tab" data-bs-toggle="tab"
                                data-bs-target="#dash" type="button"><i
                                class="fas fa-angle-right"></i>Account</button>
                    </li>

                    <li class="nav-item mb-2">
                        <button class="nav-link font-light" id="1-tab" data-bs-toggle="tab" data-bs-target="#order"
                                type="button"><i class="fas fa-angle-right"></i>Orders</button>
                    </li>

                    <li class="nav-item mb-2">
                        <button class="nav-link font-light" id="2-tab" data-bs-toggle="tab"
                                data-bs-target="#wishlist" type="button"><i
                                class="fas fa-angle-right"></i>Wishlist</button>
                    </li>

                    <li class="nav-item mb-2">
                        <button class="nav-link font-light" id="5-tab" data-bs-toggle="tab"
                                data-bs-target="#profile" type="button"><i
                                class="fas fa-angle-right"></i>Profile</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link font-light" id="6-tab" data-bs-toggle="tab"
                                data-bs-target="#security" type="button"><i
                                class="fas fa-angle-right"></i>Security</button>
                    </li>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="filter-button dash-filter dashboard">
                    <button class="btn btn-solid-default btn-sm fw-bold filter-btn">Show Menu</button>
                </div>

                <div class="tab-content " id="myTabContent">
                    <div class="tab-pane fade show active" id="dash">
                        <div class="dashboard-right">
                            <div class="dashboard">
                                <div class="page-title title title1 title-effect">
                                    <h2>My Account</h2>
                                </div>
                                <div class="welcome-msg">
                                    <h6 class="font-light">Hello, <span>{{$user->name}} !</span></h6>
                                    <p class="font-light">From your My Account Dashboard you can view or edit your information .</p>
                                </div>

                                <div class="box-account box-info">
                                    <div class="box-head">
                                        <h3>Account Information</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="box">
                                                <div class="box-title">
                                                </div>
                                                <div class="box-content">
                                                    <h6 class="font-light">{{$user->name}} </h6>
                                                    <h6 class="font-light">{{$user->email}}</h6>
                                                    <a href="javascript:void(0)">Change Password</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade table-dashboard dashboard wish-list-section" id="order">
                        <div class="box-head mb-3">
                            <h3>My Order</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table cart-table">
                                <thead>
                                <tr class="table-head">
                                    <th scope="col">Order Id</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Note</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">View</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>
                                        <p class="mt-0">{{$order->id}}</p>
                                    </td>

                                    <td>
                                        <p class="fs-6 m-0">{{date_format($order->created_at, "Y/m/d")}}</p>
                                    </td>

                                    <td>
                                        <p class="fs-6 m-0">{{$order->note}}</p>
                                    </td>

                                    @if($order->status == 0)
                                    <td>
                                        <p class="danger-button btn btn-sm">Cancel</p>
                                    </td>
                                    @elseif($order->status == 1)
                                    <td>
                                        <p class="success-button btn btn-sm" style="background-color: grey">Pending</p>
                                    </td>
                                    @elseif($order->status == 2)
                                    <td>
                                        <p class="success-button btn btn-sm">Success</p>
                                    </td>
                                    @elseif($order->status == 3)
                                    <td>
                                        <p class="success-button btn btn-sm" style="background-color: cadetblue">Processing</p>
                                    </td>
                                    @endif
                                    <td>
                                        <p class="theme-color fs-6">${{number_format($order->amount)}}</p>
                                    </td>

                                    <td>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailOrder{{$order->id}}">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade table-dashboard dashboard wish-list-section" id="wishlist">
                        <div class="box-head mb-3">
                            <h3>My Wishlish</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table cart-table">
                                <thead>
                                <tr class="table-head">
                                    <th scope="col">image</th>
                                    <th scope="col">Order Id</th>
                                    <th scope="col">Product Details</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <a href="product-left-sidebar.html">
                                            <img src="{{asset('voxo_front/assets/images/fashion/product/front/1.jpg')}}"
                                                 class="blur-up lazyload" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <p class="m-0">#125021</p>
                                    </td>
                                    <td>
                                        <p class="fs-6 m-0">Outwear & Coats</p>
                                    </td>
                                    <td>
                                        <p class="theme-color fs-6">$49.54</p>
                                    </td>
                                    <td>
                                        <a href="cart.html" class="btn btn-solid-default btn-sm fw-bold">Move to
                                            Cart</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="product-left-sidebar.html">
                                            <img src="{{asset('voxo_front/assets/images/fashion/product/front/2.jpg')}}"
                                                 class="blur-up lazyload" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <p class="m-0">#125367</p>
                                    </td>
                                    <td>
                                        <p class="fs-6 m-0">Outwear & Coats</p>
                                    </td>
                                    <td>
                                        <p class="theme-color fs-6">$49.54</p>
                                    </td>
                                    <td>
                                        <a href="cart.html" class="btn btn-solid-default btn-sm fw-bold">Move to
                                            Cart</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="product-left-sidebar.html">
                                            <img src="{{asset('voxo_front/assets/images/fashion/product/front/3.jpg')}}"
                                                 class="blur-up lazyload" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <p class="m-0">#125948</p>
                                    </td>
                                    <td>
                                        <p class="fs-6 m-0">Men's Sweatshirt</p>
                                    </td>
                                    <td>
                                        <p class="theme-color fs-6">$49.54</p>
                                    </td>
                                    <td>
                                        <a href="cart.html" class="btn btn-solid-default btn-sm fw-bold">Move to
                                            Cart</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="product-left-sidebar.html">
                                            <img src="{{asset('voxo_front/assets/images/fashion/product/front/4.jpg')}}"
                                                 class="blur-up lazyload" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <p class="m-0">#127569</p>
                                    </td>
                                    <td>
                                        <p class="fs-6 m-0">Men's Hoodie t-shirt</p>
                                    </td>
                                    <td>
                                        <p class="theme-color fs-6">$49.54</p>
                                    </td>
                                    <td>
                                        <a href="cart.html" class="btn btn-solid-default btn-sm fw-bold">Move to
                                            Cart</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="product-left-sidebar.html">
                                            <img src="{{asset('voxo_front/assets/images/fashion/product/front/5.jpg')}}"
                                                 class="blur-up lazyload" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <p class="m-0">#127569</p>
                                    </td>
                                    <td>
                                        <p class="fs-6 m-0">Men's Hoodie t-shirt</p>
                                    </td>
                                    <td>
                                        <p class="theme-color fs-6">$49.54</p>
                                    </td>
                                    <td>
                                        <a href="cart.html" class="btn btn-solid-default btn-sm fw-bold">Move to
                                            Cart</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="product-left-sidebar.html">
                                            <img src="{{asset('voxo_front/assets/images/fashion/product/front/6.jpg')}}"
                                                 class="blur-up lazyload" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <p class="m-0">#125021</p>
                                    </td>
                                    <td>
                                        <p class="fs-6 m-0">Men's Sweatshirt</p>
                                    </td>
                                    <td>
                                        <p class="theme-color fs-6">$49.54</p>
                                    </td>
                                    <td>
                                        <a href="cart.html" class="btn btn-solid-default btn-sm fw-bold">Move to
                                            Cart</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade dashboard-profile dashboard changeProfile" id="profile" >
                        <div class="box-head" id="changeProfile1">
                            <h3>Profile</h3>
                            <a href="javascript:void(0)" data-bs-toggle="modal"
                               data-bs-target="#editProfile">Edit</a>
                        </div>
                        <ul class="dash-profile" id="changeProfile">
                            <li>
                            </li>

                            <li>
                                <div class="left">
                                    <h6 class="font-light">Your name</h6>
                                </div>
                                <div class="right">
                                    <h6>{{$user->name}}</h6>
                                </div>
                            </li>

                            <li>
                                <div class="left">
                                    <h6 class="font-light">Phone</h6>
                                </div>
                                <div class="right">
                                    <h6>{{$user->phone}}</h6>
                                </div>
                            </li>

                            <li>
                                <div class="left">
                                    <h6 class="font-light">Email Address</h6>
                                </div>
                                <div class="right">
                                    <h6>{{$user->email}}</h6>
                                </div>
                            </li>

                            <li>
                                <div class="left">
                                    <h6 class="font-light">Address</h6>
                                </div>
                                <div class="right">
                                    <h6>{{$user->address}}</h6>
                                </div>
                            </li>

                            <li>
                                <div class="left">
                                    <h6 class="font-light">Total orders</h6>
                                </div>
                                <div class="right">
                                    <h6>{{number_format($count)}} orders</h6>
                                </div>
                        </ul>
                    </div>

                    <div class="tab-pane fade dashboard-security dashboard" id="security">
                        <div class="box-head">
                            <h3>Delete Your Account</h3>
                        </div>
                        <div class="security-details">
                            <h5 class="font-light mt-3">Hi <span> Mark Enderess,</span>
                            </h5>
                            <p class="font-light mt-1">We Are Sorry To Here You Would Like To Delete Your Account.
                            </p>
                        </div>

                        <div class="security-details-1 mb-0">
                            <div class="page-title">
                                <h4 class="fw-bold">Note</h4>
                            </div>
                            <p class="font-light">Deleting your account will permanently remove your profile,
                                personal settings, and all other associated information. Once your account is
                                deleted, You will be logged out and will be unable to log back in.</p>

                            <p class="font-light mb-4">If you understand and agree to the above statement, and would
                                still like to delete your account, than click below</p>

                            <button class="btn btn-solid-default btn-sm fw-bold rounded" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal">Delete Your
                                Account</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- user dashboard section end -->



<!-- Edit Profile Modal Start -->
<div class="modal fade add-address-modal" id="editProfile">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label font-light">Full Name</label>
                        <input type="text" class="form-control changeName" name="name"  value="{{$user->name}}">
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label font-light">Phone</label>
                        <input type="text" class="form-control changePhone" name="phone" value="{{$user->phone}}">
                    </div>

                    <div>
                        <label for="number" class="form-label font-light">Email</label>
                        <input type="text" class="form-control changeEmail" name="email" value="{{$user->email}}">
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label font-light">Full Address</label>
                        <input type="text" class="form-control changeAddress" name="address" id="address" value="{{$user->address}}">
                    </div>

                    <div class="modal-footer pt-0 text-end d-block">
                        <button type="button" class="btn bg-secondary text-white rounded-1 modal-close-button"
                                data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-solid-default rounded-1" onclick="updateProfile({{$user->id}})">Save</button>
                    </div>
            </div>

        </div>
    </div>
</div>
<!-- Edit Profile Modal End -->

<!-- Detail Order Modal Start -->
@foreach($orders as $order)
<div class="modal fade add-address-modal" id="detailOrder{{$order->id}}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <table class="table cart-table">
                    <thead>
                    <tr class="table-head">
                        <th scope="col">Image</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orderDetails[$order->id] as $orderDetail)
                    <tr>
                        <td>
                            <img style="width: 90px; height: 95px" src="{{asset('images/'.$orderDetail->product->image)}}" class="blur-up lazyload" alt="">
                        </td>

                        <td>
                            <p class="mt-0">{{$orderDetail->product->name}}</p>
                        </td>

                        <td>
                            <p class="mt-0">{{$orderDetail->quantity}}</p>
                        </td>

                        <td>
                            <p class="mt-0">{{$orderDetail->product->price}}</p>
                        </td>
                    </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endforeach
<!-- Detail Order Modal End -->

<!-- Reset Password Modal Start -->
<div class="modal fade reset-email-modal" id="resetEmail">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Comfirm Email</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-3">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label font-light">Email address</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="comfirmEmail" class="form-label font-light">Comfirm Email address</label>
                        <input type="email" class="form-control" id="comfirmEmail">
                    </div>
                    <div>
                        <label for="exampleInputPassword1" class="form-label font-light">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                </form>
            </div>
            <div class="modal-footer pt-0">
                <button class="btn bg-secondary rounded-1 modal-close-button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-solid-default rounded-1" data-bs-dismiss="modal">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Reset Password Modal End -->

<!-- Comfirm Delete Modal Start -->
<div class="modal delete-account-modal fade" id="deleteModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pb-3 text-center mt-4">
                <h4>Are you sure you want to delete your account?</h4>
            </div>
            <div class="modal-footer d-block text-center mb-4">
                <button class="btn btn-solid-default btn-sm fw-bold rounded" data-bs-target="#doneModal"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Yes Delete account</button>
            </div>
        </div>
    </div>
</div>
<div class="modal delete-account-modal fade" id="doneModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pb-3 text-center mt-4">
                <h4>Done!!! Delete Your Account</h4>
            </div>
            <div class="modal-footer d-block text-center mb-4">
                <button class="btn btn-solid-default btn-sm fw-bold rounded" data-bs-target="#exampleModalToggle"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Okay</button>
            </div>
        </div>
    </div>
</div>
<!-- Comfirm Delete Modal End -->

<!-- Mirrored from themes.pixelstrap.com/voxo/front-end/user-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Jul 2022 15:22:38 GMT -->
</html>


    <script>
        function updateProfile(id)
        {
            var name = $('.changeName').val();
            var phone = $('.changePhone').val();
            var email = $('.changeEmail').val();
            var address = $('.changeAddress').val();

            $.get('{{route('updateProfile')}}', {'id' : id, 'name' : name, 'email' : email, 'phone': phone, 'address' : address},function (){
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Success',
                    showConfirmButton: false,
                    timer: 500
                });
                $('#changeProfile').load("{{route('dashboard')}} .changeProfile1");
                $('#changeProfile').load("{{route('dashboard')}} .changeProfile");

            });

        }
    </script>
@endsection
