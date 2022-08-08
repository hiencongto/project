{{$msg ?? ''}}
<form method="post">
    @csrf
    <input name="name" type="text" placeholder="" /> <br/>
    <input name="description" type="text" placeholder="" /> <br/>
    <input name="status" type="number" placeholder="" /><br/>
    <input type="submit">
</form>
