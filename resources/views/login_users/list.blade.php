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
<link rel="stylesheet" type="text/css" href="resources/css/app.css" />
<h2> User List Table</h2>
<span>{{$msg ?? ''}}</span>

<div id="menu">
    <ul>
        <li><a href="">Trang chủ</a></li>
        <li><a href="">Categories</a></li>
        <li><a href="#">Sản phẩm</a></li>
        <li><a href="#">Giới thiệu</a></li>
        <li><a href="#">Liên hệ</a></li>
    </ul>
</div>


<div>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>phone</th>
            <th>email</th>
            <th>address</th>
            <th>password</th>
            <th>created_at</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->created_at}}</td>
                <td><a href="{{route('showuser', ['id' => $user->id])}}">Sua</a><th>
                <td><a href="{{route('deleteuser', ['id' => $user->id])}}">Xoa</a></td>
            </tr>
        @endforeach

    </table>
</div>

</body>
</html>
