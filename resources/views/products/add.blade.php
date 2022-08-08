<!DOCTYPE html>

<head></head>
<body>
    <title>Product nè</title>
    <div style="text-align: center">
        <h1>Nhập sản phẩm vào đây</h1>
{{--        {{$msg ?? ''}}--}}
        <script type='text/javascript'>alert('{{$msg ?? ''}}');</script>
        <form  method="post" enctype="multipart/form-data" >
            @csrf
            <input name="name" type="text" placeholder="Tên sản phẩm" /> <br/>
            <input name="price" type="text" placeholder="Giá sản phẩm" /> <br/>
            <input name="image" type="file" id="fileupload"><br/>
            <select name="category_id">
            @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach

            </select><br/>
            <select name="brand_id">
                @foreach($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
            </select><br/>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>

