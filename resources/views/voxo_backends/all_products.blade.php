@extends('layouts.site_voxo')

@section('content')
        <!-- Container-fluid starts-->
        <div>
            <div class="title-header title-header-1">
                <h5>Products List</h5>
                <form class="d-inline-flex">
                    <a href="{{route('add_product')}}" class="align-items-center btn btn-theme">
                        <i data-feather="plus-square"></i>Add New
                    </a>
                </form>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <div class="table-responsive table-desi table-product">
                                        <table class="table table-1d all-package">
                                            <thead>
                                            <tr>
                                                <th>Product Image</th>
                                                <th>Product Name</th>
                                                <th>Category</th>
                                                <th>Brand</th>
                                                <th>Current Qty</th>
                                                <th>Price</th>
                                                <th>Option</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($products as $product)
                                            <tr>
                                                <td>
                                                    <img src="{{asset('images/'.$product->image)}}" class="img-fluid"   alt="">
                                                </td>

                                                <td>
                                                    <a href="javascript:void(0)">{{$product->name}}</a>
                                                </td>

                                                <td>
                                                    <a href="javascript:void(0)">{{$product->category->name}}</a>
                                                </td>

                                                <td>
                                                    <a href="javascript:void(0)">{{$product->brand->name}}</a>
                                                </td>

                                                <td></td>

                                                <td class="td-price">$.{{$product->price}}</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="order-detail.html">
                                                                <span class="lnr lnr-eye"></span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{route('show_product',['id' => $product->id])}}">
                                                                <span class="lnr lnr-pencil"></span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{route('delete_product', ['id' => $product->id])}}">
                                                                <i class="far fa-trash-alt theme-color"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>

                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

{{--                            <div class="pagination-box">--}}
{{--                                <nav class="ms-auto me-auto " aria-label="...">--}}
{{--                                    <ul class="pagination pagination-primary">--}}
{{--                                        <li class="page-item disabled">--}}
{{--                                            <a class="page-link" href="javascript:void(0)"--}}
{{--                                               tabindex="-1">Previous</a>--}}
{{--                                        </li>--}}

{{--                                        <li class="page-item active">--}}
{{--                                            <a class="page-link" href="javascript:void(0)">1</a>--}}
{{--                                        </li>--}}

{{--                                        <li class="page-item">--}}
{{--                                            <a class="page-link" href="javascript:void(0)">2 <span--}}
{{--                                                    class="sr-only">(current)</span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}

{{--                                        <li class="page-item">--}}
{{--                                            <a class="page-link" href="javascript:void(0)">3</a>--}}
{{--                                        </li>--}}

{{--                                        <li class="page-item">--}}
{{--                                            <a class="page-link" href="javascript:void(0)">Next</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </nav>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

@endsection
