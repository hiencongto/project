<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Repositories\RepositoryInterface\CategoryRepositoryInterface;
use App\Repositories\RepositoryInterface\ProductRepositoryInterface;
use App\Repositories\RepositoryInterface\FeedbackRepositoryInterface;
use App\Repositories\RepositoryInterface\OrderDetailRepositoryInterface;
use App\Repositories\RepositoryInterface\WishlistRepositoryInterface;

class CategoryController extends Controller
{
    protected $categoryRepository;
    protected $productRepository;
    protected $feedbackRepository;
    protected $orderDetailRepository;
    protected $wishlistRepository;

    public function __construct(
        CategoryRepositoryInterface $categoryRepository,
        ProductRepositoryInterface $productRepository,
        FeedbackRepositoryInterface $feedbackRepository,
        OrderDetailRepositoryInterface $orderDetailRepository,
        WishlistRepositoryInterface $wishlistRepository) //dependency injection: giam thieu su phu thuoc
    {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
        $this->feedbackRepository = $feedbackRepository;
        $this->orderDetailRepository = $orderDetailRepository;
        $this->wishlistRepository = $wishlistRepository;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function viewAdd()
    {
        return view('voxo_backends.add_new_category');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(Request $request)
    {
        $data = [
          'name' => $request->name,
          'description' => $request->description,
          'status' => $request->status
        ];

        if(! $this->categoryRepository->create($data)){
            return view('voxo_backends.add_new_category')->with('msg', 'fail');
        }

        return view('voxo_backends.add_new_category')->with('msg', 'success');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function list()
    {
        $categories = $this->categoryRepository->getAll();

        return view('voxo_backends.all_categories', [
            'categories' => $categories,
            'msg' => Session::get('msg')
        ]);
    }

    /**
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id)
    {
        $products = $this->productRepository->getByCategoryId($id);

        foreach ($products as $product) {
            if ( ! $this->feedbackRepository->deleteByProductId($product['id'])) {
                return redirect()->back()->with('msg', 'fail');
            }

            if ( ! $this->orderDetailRepository->deleteByProductId($product['id'])){
                return redirect()->back()->with('msg', 'fail');
            }

            if ( ! $this->wishlistRepository->deleteByProductId($product['id'])){
                return redirect()->back()->with('msg', 'fail');
            }

            if (! $this->productRepository->delete($product['id'])) {
                return redirect()->back()->with('msg', 'fail');
            }
        }

        if (! $this->categoryRepository->delete($id)) {
            return redirect()->route('all_categories')->with('msg', 'fail');
        }

        return redirect()->route('all_categories')->with('msg', 'success');
    }

    public function show(int $id)
    {
        $category = $this->categoryRepository->find($id);

        if (! $category) {
            return view('voxo_backends.all_categories', [
                'msg' => 'fail'
            ]);
        }

        return view('voxo_backends.edit_category', [
            'category' => $category
        ]);
    }

    public function update(int $id, Request $request)
    {
        $category = $this->categoryRepository->find($id);

        if (! $category) {
            return view('voxo_backends.show_category', [
                'msg' => 'fail'
            ]);
        }

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status
        ];
        $this->categoryRepository->update($id,$data);

        return redirect()->route('all_categories')->with('msg', 'success');
    }
}
