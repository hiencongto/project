@extends('layouts.site_voxo')

@section('content')
{{--    {{dd($order)}}--}}
        <!-- tracking section start -->
        <div>
            <div class="title-header title-header-block package-card">
                <div>
                    <h5>Order #36648</h5>
                </div>
                <div class="card-order-section">
                    <ul>
                        <li>{{date_format($order->created_at,"Y/m/d ")}}</li>
                        <li>{{count($orderDetails)}} items</li>
                    </ul>
                </div>
            </div>

            <!-- tracking table start -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="bg-inner cart-section order-details-table">
                                    <div class="row g-4">
                                        <div class="col-xl-8">
                                            <div class="table-responsive table-details">
                                                <table class="table cart-table table-borderless">
                                                    <thead>
                                                    <tr>
                                                        <th colspan="2">Items</th>
                                                        <th class="text-end" colspan="2">
                                                        </th>
                                                    </tr>
                                                    </thead>

                                                    <tbody>
                                                    @foreach($orderDetails as $orderDetail)
                                                    <tr class="table-order">
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="{{asset('images/'.$orderDetail->product->image)}}" class="img-fluid blur-up lazyload" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <p>Product Name</p>
                                                            <h5>{{$orderDetail->product->name}}</h5>
                                                        </td>
                                                        <td>
                                                            <p>Quantity</p>
                                                            <h5>{{$orderDetail->quantity}}</h5>
                                                        </td>
                                                        <td>
                                                            <p>Price</p>
                                                            <h5>${{$orderDetail->product->price}}</h5>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>

                                                    <tfoot>
{{--                                                    <tr class="table-order">--}}
{{--                                                        <td colspan="3">--}}
{{--                                                            <h5>Subtotal :</h5>--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            <h4>$55.00</h4>--}}
{{--                                                        </td>--}}
{{--                                                    </tr>--}}

{{--                                                    <tr class="table-order">--}}
{{--                                                        <td colspan="3">--}}
{{--                                                            <h5>Shipping :</h5>--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            <h4>$12.00</h4>--}}
{{--                                                        </td>--}}
{{--                                                    </tr>--}}

{{--                                                    <tr class="table-order">--}}
{{--                                                        <td colspan="3">--}}
{{--                                                            <h5>Tax(GST) :</h5>--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            <h4>$10.00</h4>--}}
{{--                                                        </td>--}}
{{--                                                    </tr>--}}

                                                    <tr class="table-order">
                                                        <td colspan="3">
                                                            <h4 class="theme-color fw-bold">Total Price :</h4>
                                                        </td>
                                                        <td>
                                                            <h4 class="theme-color fw-bold">${{$order->amount}}</h4>
                                                        </td>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="col-xl-4">
                                            <div class="order-success">
                                                <div class="row g-4">
                                                    <h4>summery</h4>
                                                    <ul class="order-details">
                                                        <li>Order ID: {{$order->id}}</li>
                                                    </ul>

                                                    <h4>shipping address</h4>
                                                    <ul class="order-details">
                                                        <li>{{$order->name}}</li>
                                                        <li>{{$order->phone}}</li>
                                                        <li>{{$order->address}}</li>
                                                    </ul>

                                                    <div class="payment-mode">
                                                        <h4>Note</h4>
                                                        <p>{{$order->note}}</p>
                                                    </div>

                                                    <div class="delivery-sec">
{{--                                                        <h3>expected date of delivery: <span>october 22, 2018</span>--}}
{{--                                                        </h3>--}}
{{--                                                        <a href="order-tracking.html">track order</a>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- section end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tracking table end -->
        </div>
        <!-- tracking section End -->
    </div>
</div>
<!-- page-wrapper End -->

@endsection
