<table>
    <thead>
        <tr>
            <td>Chapter</td>
            <td>Xoa</td>
        </tr>
    </thead>

    <tbody>
        @foreach($chapters as $chapter)
            <tr>
                <td>{{$chapter->chapter}}</td>
                <td><a href="{{route('deleteChapter', ['id' => $chapter->story_id, 'id2' => $chapter->chapter ])}}">Xoa</a></td>
            </tr>
        @endforeach
    </tbody>

</table>
