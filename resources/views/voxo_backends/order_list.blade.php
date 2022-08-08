@extends('layouts.site_voxo')

@section('content')
        <!-- Order section Start -->
        <div>
            <div class="title-header">
                <h5>Order List</h5>
            </div>

            <!-- Table Start -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <div class="table-responsive table-desi">
                                        <table class="table table-striped all-package">
                                            <thead>
                                            <tr>
                                                <th>User Name</th>
                                                <th>Phone</th>
                                                <th>Date</th>
                                                <th>Note</th>
                                                <th>Delivery Status</th>
                                                <th>Amount</th>
                                                <th>Option</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($orders as $order)
                                            <tr>
                                                <td>{{$order->name}}</td>

                                                <td>{{$order->phone}}</td>

                                                <td>{{date_format($order->created_at,"Y/m/d")}}</td>

                                                <td>{{$order->note}}</td>

                                                @if($order->status == 1)
                                                    <td class="order-pending">
                                                        <span>Pending</span>
                                                    </td>

                                                @elseif($order->status == 0)
                                                    <td class="order-cancle">
                                                        <span>Cancle</span>
                                                    </td>

                                                @elseif($order->status == 3)
                                                    <td class="order-cancle">
                                                        <span style="background-color: darkgreen">Processing</span>
                                                    </td>

                                                @else($order->status == 2)
                                                    <td class="order-success">
                                                        <span>Success</span>
                                                    </td>
                                                @endif
                                                <td>{{$order->amount}}</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{route('detail_order', ['id' => $order->id])}}">
                                                                <span class="lnr lnr-eye"></span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{route('edit_order', ['id' => $order->id])}}">
                                                                <span class="lnr lnr-pencil"></span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{route('delete_order', ['id' => $order->id])}}" >
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
                            </div>
                            <!-- Pagination Box End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->
        </div>
        <!-- Order section End -->
    </div>
    <!-- Page Body End-->
</div>
<!-- page-wrapper End -->
{{--<script>--}}
{{--    function deleteOrder(){--}}
{{--        swal({--}}
{{--            title: "Are you sure?",--}}
{{--            icon: "warning",--}}
{{--            buttons: true,--}}
{{--            dangerMode: true,--}}
{{--        })--}}
{{--            .then((willDelete) => {--}}
{{--                if (willDelete) {--}}
{{--                    swal("Poof! Your imaginary file has been deleted!", {--}}
{{--                        icon: "success",--}}
{{--                    });--}}
{{--                } else {--}}
{{--                    swal("Your imaginary file is safe!");--}}
{{--                }--}}
{{--            });--}}
{{--    }--}}
{{--</script>--}}


@endsection
