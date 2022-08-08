<!DOCTYPE html>
<head>
    <title> Dashboard  </title>
</head>
<body>
<div id="menu">
    <ul>
        <li><a href="{{route('home')}}">Trang chủ</a></li>
        <li><a href="{{route('listproduct')}}">Sản phẩm</a></li>
        <li><a href="{{route('listbrand')}}">Nhãn hàng</a></li>
        <li><a href="{{route('list')}}">Thể loại?</a></li>
        <li><a href="">Đơn hàng</a></li>
        <li><a href="#">Liên hệ</a></li>
    </ul>
</div>
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
