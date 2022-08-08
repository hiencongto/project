{{$msg ?? ''}}
<form method="post">
    @csrf
    <input name="name" type="text" value="{{$category->name}}" /> <br/>
    <input name="description" type="text" value="{{$category->description}}" /> <br/>
    <input name="status" type="number" value="{{$category->status}}" /><br/>
    <input type="submit">
</form>
