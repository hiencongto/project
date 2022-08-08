<!DOCTYPE html>

<head></head>
<body>
<title>Register nè</title>
<div style="text-align: center">
    <h1>Register</h1>
            {{$msg ?? ''}}
    <form  method="post" >
        @csrf
        <input name="name" type="text" placeholder="Họ và tên" /> <br/>
        <input name="phone" type="text" placeholder="Số điện thoại" /> <br/>
        <input name="email" type="text" placeholder="Email"><br/>
        <input name="address" type="text" placeholder="Địa chỉ"><br/>
        <input name="password" type="text" placeholder="Mật khẩu"><br/>
        <button type="submit">Submit</button>
    </form>
</div>
</body>

