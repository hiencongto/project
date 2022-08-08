{{$msg ?? ''}}
<form method="post">
    @csrf
    <input name="name" type="text" value="{{$brand->name}}" /> <br/>
    <input name="status" type="number" value="{{$brand->status}}" /><br/>
    <input type="submit">
</form>

