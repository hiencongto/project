@extends('layouts.site_voxo')
@section('content')
    <!-- Page Body Start -->
    {{--    <div class="page-body-wrapper">--}}
    <!-- Page Sidebar Start -->
    {{$msg ?? ' '}}
    <div >
        <div class="title-header">
            <h5>Edit User</h5>
        </div>
        <!-- New User start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-home-tab"
                                                    data-bs-toggle="pill" data-bs-target="#pills-home"
                                                    type="button">Account</button>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                            <form class="theme-form theme-form-2 mega-form" method="post">
                                                @csrf
                                                <div class="card-header-1">
                                                    <h5>User Information</h5>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="form-label-title col-lg-2 col-md-3 mb-0">Full
                                                            Name</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            {{$user->name}}
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-lg-2 col-md-3 col-form-label form-label-title">Phone</label>
                                                        <div class="col-md-9 col-lg-10">
                                                           {{$user->phone}}
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-lg-2 col-md-3 col-form-label form-label-title">Email
                                                            Address</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            {{$user->email}}
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-lg-2 col-md-3 col-form-label form-label-title">Address</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            {{$user->address}}
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-lg-2 col-md-3 col-form-label form-label-title">Role</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <select name="role">
                                                                <option value="user" {{$user->role == 'user' ? 'selected' : ''}}>User</option>
                                                                <option value="admin" {{$user->role == 'admin' ? 'selected' : ''}}>Admin</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center">
                                                        <label
                                                            class="col-lg-2 col-md-3 col-form-label form-label-title">
                                                        </label>
                                                        <div>
                                                            <button type="submit" class="align-items-center btn btn-theme" >
                                                                <i data-feather="plus-square"></i>Edit
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
            </div>
        </div>
        <!-- New User End -->

    </div>
    <!-- Page Sidebar End -->
    {{--    </div>--}}

    <!-- page-wrapper End -->



@endsection

