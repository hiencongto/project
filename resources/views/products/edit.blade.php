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
{{$msg ?? ''}}
    <div>
        <form method="post">
            @csrf
            <input name="name" type="text" value="{{$product->name}}" /> <br/>
            <input name="price" type="text" value="{{$product->price}}" /> <br/>
            <input name="image" type="file" id="fileupload"><br/>
{{--            @foreach($categories as $category)--}}
{{--                @if($category->id == $product->category_id)--}}
{{--            <select name="category_id" value="{{$category->name}}">--}}
{{--                @endif--}}
{{--                <option value="{{$category->id}}">{{$category->name}}</option>--}}
{{--                @endforeach--}}
{{--            </select><br/>--}}
{{--            @foreach($brands as $brand)--}}
{{--                @if($brand->id == $product->brand_id)--}}
{{--            <select name="category_id" value="{{$brand->name}}">--}}
{{--                @endif--}}
{{--                <option value="{{$brand->id}}">{{$brand->name}}</option>--}}
{{--            @endforeach--}}
{{--            </select><br/>--}}
            <select name="category_id">
                @foreach($categories as $category)
                    <option value="{{$category->id}}" {{$category->id == $product->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                @endforeach
            </select>
            <button type="submit">Sửa</button>

        </form>
    </div>
</body>
