@extends('layouts.site_voxo')
@section('content')
        <!-- vendor List Section Start -->
        <div>
            <div class="title-header title-header-1">
                <h5>Brand List</h5>
                <form class="d-inline-flex">
                    <a href="{{route('add_brand')}}" class="align-items-center btn btn-theme">
                        <i data-feather="plus-square"></i>Add New
                    </a>
                </form>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <!-- Table Start -->
                            <div class="card-body">
                                <div class="table-responsive table-desi">
                                    <table class="user-table vendor-table table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Brand</th>
                                            <th>Products</th>
                                            <th>Create Date</th>
                                            <th>Status</th>
                                            <th>Options</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($brands as $brand)
                                        <tr>
                                            <td>
                                                        <span>
                                                            <img src="{{asset('images/'.$brand->image)}}" alt="users">
                                                        </span>
                                                <a href="javascript:void(0)">
                                                    <span class="d-block">{{$brand->name}}</span>
                                                </a>
                                            </td>

                                            <td>1670</td>

                                            <td class="font-primary">{{$brand->created_at}}</td>

                                            <td>{{$brand->status}}</td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <span class="lnr lnr-eye"></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{route('show_brand', ['id' => $brand->id])}}">
                                                            <span class="lnr lnr-pencil"></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{route('delete_brand', ['id' => $brand->id])}}">
                                                            <span class="lnr lnr-trash"></span>
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
                            <!-- Table End -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- vendor List Section End -->
@endsection
