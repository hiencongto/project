@extends('layouts.site_voxo')

@section('content')

        <!-- Container-fluid starts-->
        <div >
            <div class="title-header title-header-1">
                <h5>All Users</h5>
            </div>
            <!-- All User Table Start -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <div class="table-responsive table-desi">
                                        <table class="user-table table table-striped">
                                            <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Address</th>
                                                <th>Options</th>
                                            </tr>
                                            </thead>
                                            <tbody>
{{--                                            class="form-check user-checkbox"--}}
                                            @foreach($users as $user)
                                            <tr>
                                                <td>
                                                    <span>
                                                        <img src="{{asset('voxo_back/assets/images/users/1.jpg')}}" alt="users">
                                                    </span>
                                                </td>

                                                <td>{{$user->id}}</td>

                                                <td>
                                                    <a href="javascript:void(0)">
                                                        <span class="d-block font-primary">{{$user->name}}</span>
                                                    </a>
                                                </td>

                                                <td>{{$user->phone}}</td>

                                                <td>{{$user->email}}</td>

                                                @if($user->role == 1)
                                                    <td class="">User</td>
                                                @elseif($user->admin == 0)
                                                    <td class="">Admin</td>
                                                @endif

                                                <td class="">{{$user->address}}</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{route('show_user',['id' => $user->id])}}">
                                                                <span class="lnr lnr-pencil"></span>
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
{{--                                            <a class="page-link" href="javascript:void(0)">Previous</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="page-item active">--}}
{{--                                            <a class="page-link" href="javascript:void(0)">1 </a>--}}
{{--                                        </li>--}}
{{--                                        <li class="page-item">--}}
{{--                                            <a class="page-link" href="javascript:void(0)">2</a>--}}
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
            <!-- All User Table Ends-->

        <!-- Container-fluid end -->
    </div>
    <!-- Page Body End -->
@endsection
