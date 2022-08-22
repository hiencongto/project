
{{$msg ?? ' '}}
<form method="post">
    @csrf
    <select name="story_id" enctype="multipart/form-data">
        @foreach($stories as $story)
        <option value="{{$story->id}}">{{$story->name}}</option>
        @endforeach
    </select>
    <input type="text" name="chapter">
    <input type="file" name="image">
    <button type="submit">Submit</button>
</form>
