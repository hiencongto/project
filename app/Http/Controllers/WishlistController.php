<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\RepositoryInterface\WishlistRepositoryInterface;
use App\Repositories\RepositoryInterface\ProductRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    protected $wishlistRepository;
    protected $productRepository;

    public function __construct(
        WishlistRepositoryInterface $wishlistRepository,
        ProductRepositoryInterface $productRepository
        )
    {
        $this->wishlistRepository = $wishlistRepository;
    }


    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function creat(Request $request)
    {
        $user = Auth::guard('user')->user();

        if ( ! $this->wishlistRepository->checkWishlist($user->id, $request->id)) {
            $data = [
                'user_id' => $user->id,
                'product_id' => $request->id
            ];

            if ( ! $this->wishlistRepository->create($data)) {
                return redirect()->back()->with('msg', 'fail');
            }
        }

    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function list()
    {
        $user = Auth::guard('user')->user();
        if (isset($user)) {
            $wishlists = $this->wishlistRepository->findWishlistByUserId($user->id);

            return view('voxo_home.wishlist', [
                'wishlists' => $wishlists
            ]);
        }
        else {
            return view('voxo_home.wishlist');
        }
    }

    /**
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id)
    {
        if (! $this->wishlistRepository->delete($id)) {
            return redirect()->back()->with('msg', 'fail');
        }

        return redirect()->route('list.wishlist')->with('msg', 'success');
    }
}
