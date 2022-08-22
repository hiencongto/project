<?php

namespace App\Http\Controllers;
use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function view()
    {
        return view('truyen.add_story');
    }

    public function create(Request $request)
    {
        $name = $request->name;

        if (! Story::create(['name' => $name])) {
            return redirect()->back()->with('msg', 'fail');
        }
    }

    public function list()
    {
        $stories = Story::all();

        return view('truyen.all_stories', [
            'stories' => $stories
        ]);
    }
}
