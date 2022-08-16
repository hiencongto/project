@extends('layouts.site_voxo')
@section('content')
    <!-- vendor List Section Start -->
    <div>
        <div class="title-header title-header-1">
            <h5>Category List</h5>
{{--            <form class="d-inline-flex">--}}
{{--                <a href="{{route('add_brand')}}" class="align-items-center btn btn-theme">--}}
{{--                    <i data-feather="plus-square"></i>Add New--}}
{{--                </a>--}}
{{--            </form>--}}
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
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Options</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{$category->name}}</td>

                                            <td>{{$category->description}}</td>
                                            @if($category->status == 1)
                                            <td>In stock</td>
                                            @elseif($category->status == 0)
                                            <td>Out of stock</td>
                                            @endif
                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="{{route('show_category', ['id' => $category->id])}}">
                                                            <span class="lnr lnr-pencil"></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{route('delete_category', ['id' => $category->id])}}">
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

