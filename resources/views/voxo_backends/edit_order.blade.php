@extends('layouts.site_voxo')
@section('content')
    <div>
        <div class="title-header">
            <h5>Edit Order</h5>
        </div>

        <!-- New Product Add Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Order Information</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form" method="post"  enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-2 mb-0">User Name</label>
                                                <div class="col-sm-10">
                                                    {{$order->name}}
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-2 mb-0">Phone</label>
                                                <div class="col-sm-10">
                                                   {{$order->phone}}
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-2 mb-0">Amount</label>
                                                <div class="col-sm-10">
                                                    $.{{number_format($order->amount)}}
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-2 col-form-label form-label-title">Status</label>
                                                <div class="col-sm-1">
                                                    <select class="js-example-basic-single w-100" name="status">
                                                        <option value="1">Pending</option>
                                                        <option value="0">Cancel</option>
                                                        <option value="3">Processing</option>
                                                        <option value="2">Success</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-2 col-form-label form-label-title">Date</label>
                                                <div class="col-sm-10">
                                                    {{date_format($order->created_at,"Y/m/d")}}
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <label
                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">
                                                </label>
                                                <div>
                                                    <button type="submit" class="align-items-center btn btn-theme" >
                                                        <i data-feather="plus-square"></i>Edit Order
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection


