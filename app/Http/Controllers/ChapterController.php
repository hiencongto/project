<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use App\Repositories\RepositoryInterface\ChapterRepositoryInterface;

class ChapterController extends Controller
{
    protected $chapterRepository;

    public function __construct(ChapterRepositoryInterface $chapterRepository)
    {
        $this->chapterRepository = $chapterRepository;
    }
    public function viewAdd()
    {
        $stories = Story::all();
        return view('truyen.add_chapter',[
            'stories' => $stories
        ]);
    }

    public function addChapter(Request $request)
    {
        $data = [
            'story_id' => $request->story_id,
            'chapter' => $request->chapter,
            'image' => $request->image
        ];

        if ( ! $this->chapterRepository->findChapterByStoryIdAndChapter($request->story_id, $request->chapter)->first()){
            if (! $this->chapterRepository->create($data)){
                return redirect()->back()->with('msg', 'fail');
            }
            return redirect()->back()->with('msg', 'oke');
        }

    }

    public function list(Request $request)
    {
        $chapters = $this->chapterRepository->listChapterByStoryId($request->id);

        return view('truyen.all_chapters', [
            'chapters' => $chapters
        ]);
    }

    public function destroy(Request $request)
    {
        if (! $this->chapterRepository->deleteByStoryIdAndChapter($request->id, $request->id2)){
            return redirect()->back()->with('msg', 'fail');
        }
        return redirect()->back()->with('msg', 'oke');
    }
}
