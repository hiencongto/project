<table>
    <thead>
        <tr>
            <td>Ten</td>
            <td>Them chap</td>
            <td>Chỉnh sửa truyện</td>
        </tr>
    </thead>
    <tbody>
        @foreach($stories as $story)
            <tr>
                <td>{{$story->name}}</td>
                <td><a href="{{route('addChapter')}}">Them</a></td>
                <td><a href="{{route('allChapter', ['id' => $story->id])}}">Chỉnh sua</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
