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

<h2>HTML Table</h2>
<span>{{$msg ?? ''}}</span>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>description</th>
        <th>status</th>
        <th>created_at</th>
    </tr>
    @foreach($categories as $category)
        <tr>
            <th>{{$category->id}}</th>
            <th>{{$category->name}}</th>
            <th>{{$category->description}}</th>
            <th>{{$category->status}}</th>
            <th>{{$category->created_at}}</th>
            <th><a href="{{route('show', ['id' =>$category->id])}}">Sua</a><th>
            <th><a href="{{route('delete', ['id' => $category->id])}}">Xoa</a></th>
        </tr>
    @endforeach

</table>

</body>
</html>

