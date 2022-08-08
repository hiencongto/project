<html>
<head>
    <title> An  Horizontal Menu  </title>
    <!-- Link to external stylesheet -->
{{--    <link rel="stylesheet" type="text/css" href="style.css" />--}}
</head>
<body>
<div id="menu"> <!--Start the unordered list after the opening menu division -->
    <ul>
        <li><a href="#">Trang chủ</a></li>
        <li><a href="#">Dịch vụ</a></li>
        <li><a href="#">Sản phẩm</a></li>
        <li><a href="#">Giới thiệu</a></li>
        <li><a href="#">Liên hệ</a></li>
    </ul>
</div>
</body>
</html>

<style>
    #menu
    {
        width: 900px;
        border: 1px solid #000;
        height: 100px;
        background-color: #181818;
        font-family: Helvetica, sans-serif;
        font-size: 13px;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
    }

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
