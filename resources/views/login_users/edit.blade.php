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
        <input name="name" type="text" value="{{$user->name}}" /> <br/>
        <input name="phone" type="text" value="{{$user->phone}}" /> <br/>
        <input name="email" type="text" value="{{$user->email}}"><br/>
        <input name="address" type="text" value="{{$user->address}}" /> <br/>
        <input name="password" type="text" value="{{$user->password}}" /> <br/>
        <button type="submit">Sửa</button>

    </form>
</div>
</body>
