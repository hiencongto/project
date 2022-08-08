<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>Nhãn hàng</h2>
<span>{{$msg ?? ''}}</span>


<div id="menu">
    <ul>
        <li><a href="{{route('home')}}">Trang chủ</a></li>
        <li><a href="{{route('listproduct')}}">Sản phẩm</a></li>
        <li><a href="{{route('listbrand')}}">Nhãn hàng</a></li>
        <li><a href="">Đơn hàng</a></li>
        <li><a href="#">Liên hệ</a></li>
    </ul>
</div>

<div>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>status</th>
        <th>created_at</th>
    </tr>
    @foreach($brands as $brand)
        <tr>
            <th>{{$brand->id}}</th>
            <th>{{$brand->name}}</th>
            <th>{{$brand->status}}</th>
            <th>{{$brand->created_at}}</th>
            <th><a href="{{route('showbrand', ['id' =>$brand->id])}}">Sua</a><th>
            <th><a href="{{route('deletebrand', ['id' => $brand->id])}}">Xoa</a></th>
        </tr>
    @endforeach
</table>
</div>
<button>Thêm nhãn hàng</button>
</body>
</html>

<style>
    #menu ul
    {
        margin-top:  42px;
    }
    #menu ul li
    {
        list-style-type: none;
        display: inline;
        margin-left: 50px;
    }


</style>

