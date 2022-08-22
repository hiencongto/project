<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\RepositoryInterface\FeedbackRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    protected $feedbackRepository;

    public function __construct(FeedbackRepositoryInterface $feedbackRepository)
    {
        $this->feedbackRepository = $feedbackRepository;
    }

    public function create(Request $request)
    {
        $user = Auth::guard('user')->user();
        $product_id = $request->id;
        $comment = $request->comment;

        $data = [
            'user_id' => $user->id,
            'product_id' => $product_id,
            'comment' => $comment
        ];

        if (! $this->feedbackRepository->create($data)) {
            return redirect()->back()->with('msg', 'fail');
        }
        return redirect()->back()->with('msg', 'oke');
    }
}
