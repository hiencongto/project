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
<h2> Product List Table</h2>
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
            <th>price</th>
            <th>image</th>
            <th>category</th>
            <th>brand</th>
            <th>created_at</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <th>{{$product->id}}</th>
                <th>{{$product->name}}</th>
                <th>{{$product->price}}</th>
                <th><img src="{{asset('images/'.$product->image)}}" width="50"/></th>
{{--                {{$categories[$product->category_id-1]->name}}--}}
{{--                $brands[$product->brand_id-1]->name,--}}
{{--                <th>@foreach($categories as $category)--}}
{{--                        @if($product->category_id == $category->id)--}}
{{--                            {{$category->name}}--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                </th>--}}
{{--                <th> @foreach($brands as $brand)--}}
{{--                        @if($product->brand_id == $brand->id)--}}
{{--                            {{$brand->name}}--}}
{{--                        @endif--}}
{{--                         {{$product->brand_id == $brand->id ? $brand->name : ''}}--}}
{{--                    @endforeach--}}
{{--                </th>--}}
                <th>{{$product->category->name}}</th>
                <th>{{$product->brand->name}}</th>
                <th>{{$product->created_at}}</th>
                <th><a href="{{route('showproduct', ['id' => $product->id])}}">Sua</a><th>
                <th><a href="{{route('deleteproduct', ['id' => $product->id])}}">Xoa</a></th>
            </tr>
        @endforeach

    </table>
</div>

{{--<table>--}}
{{--    <tr>--}}
{{--        <th>id</th>--}}
{{--        <th>name</th>--}}
{{--        <th>price</th>--}}
{{--        <th>image</th>--}}
{{--        <th>category</th>--}}
{{--        <th>brand</th>--}}
{{--        <th>created_at</th>--}}
{{--    </tr>--}}
{{--    <tr>--}}
{{--        <th> <img src="C:\Users\Admin\Desktop\crud_test\public\images\Untitled.png" ></th>--}}
{{--        <th>hiern</th>--}}
{{--        <th>ahihi</th>--}}
{{--        <th>image</th>--}}
{{--        <th>category</th>--}}
{{--        <th>brand</th>--}}
{{--        <th>created_at</th>--}}
{{--    </tr>--}}
{{--</table>--}}

</body>
</html>
