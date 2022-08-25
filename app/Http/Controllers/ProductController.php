<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductRequest;
use App\Repositories\RepositoryInterface\ProductRepositoryInterface;
use App\Repositories\RepositoryInterface\BrandRepositoryInterface;
use App\Repositories\RepositoryInterface\CategoryRepositoryInterface;
use App\Repositories\RepositoryInterface\FeedbackRepositoryInterface;
use App\Repositories\RepositoryInterface\OrderDetailRepositoryInterface;
use App\Repositories\RepositoryInterface\WishlistRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    protected $productRepository;
    protected $categoryRepository;
    protected $brandRepository;
    protected $feedbackRepository;
    protected $orderDetailRepository;
    protected $wishlistRepository;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        CategoryRepositoryInterface $categoryRepository,
        BrandRepositoryInterface $brandRepository,
        FeedbackRepositoryInterface $feedbackRepository,
        OrderDetailRepositoryInterface $orderDetailRepository,
        WishlistRepositoryInterface $wishlistRepository)
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->brandRepository = $brandRepository;
        $this->feedbackRepository = $feedbackRepository;
        $this->orderDetailRepository = $orderDetailRepository;
        $this->wishlistRepository = $wishlistRepository;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function viewAdd()
    {
        $categories = $this->categoryRepository->getAll();
        $brands = $this->brandRepository->getAll();

        return view('voxo_backends.add_new_product', [
            'categories' => $categories,
            'brands' => $brands
        ]);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(AddProductRequest $request)
    {
        $categories = $this->categoryRepository->getAll();
        $brands = $this->brandRepository->getAll();

        if (! $request -> hasFile('image') ){
            return view('voxo_backends.add_new_product')->with('msg', 'Chọn file ảnh đê');
        }

        $image = $request -> file('image');
        $image_name =$image -> getClientoriginalName();
        $storedPath = $image->move('images', $image_name);
        $data = [
            'name' => $request['name'],
            'price' => $request['price'],
            'image' => $image -> getClientoriginalName(),
            'category_id' => $request['category_id'],
            'brand_id' => $request['brand_id'],
            'product_quantity' => (int) $request['quantity'],
            'description' => $request->description
        ];

        if (! $this->productRepository->create($data)){
            return view('voxo_backends.add_new_product', [
                'categories' => $categories,
                'brands' => $brands
            ]);
        }

        return view('voxo_backends.add_new_product', [
            'categories' => $categories,
            'brands' => $brands,
            'msg' => 'OKE !'
        ]);

    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function list()
    {
        $products = $this->productRepository->getAll();
        $categories = $this->categoryRepository->getAll();
        $brands = $this->brandRepository->getAll();

        return view('voxo_backends.all_products',[
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands,
        ]);

    }

    /**
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id)
    {

        if ( ! $this->feedbackRepository->deleteByProductId($id)) {
            return redirect()->back()->with('msg', 'fail');
        }

        if ( ! $this->orderDetailRepository->deleteByProductId($id)){
            return redirect()->back()->with('msg', 'fail');
        }

        if ( ! $this->wishlistRepository->deleteByProductId($id)){
            return redirect()->back()->with('msg', 'fail');
        }

        if (! $this->productRepository->delete($id)){
            return redirect()-> route('all_products')->with('msg', 'fail');
        }

        return redirect()-> route('all_products')->with('msg', 'success');
    }

    /**
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function show(int $id)
    {
        $brands = $this->brandRepository->getAll();
        $categories = $this->categoryRepository->getAll();
        $product = $this->productRepository->find($id);

        if (! $product){
            return redirect()-> route('all_products')->with('msg', 'fail');
        }

        return view('voxo_backends.edit_product', [
            'product' => $product,
            'brands' => $brands,
            'categories' => $categories
        ]);
    }

    /**
     * @param int $id
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function update(int $id, Request $request)
    {
        $brands = $this->brandRepository->getAll();
        $categories = $this->categoryRepository->getAll();
        $product = $this->productRepository->find($id);

        if (! $product){
            redirect()->route('all_product')->with('msg', 'fail');
        }

        if ( $request -> hasFile('image')){
            $image_edit = $request -> file('image');
            $image_name =$image_edit -> getClientoriginalName();
            $storedPath = $image_edit->move('images', $image_name);

            $data = [
                'name' => $request->name,
                'price' => $request->price,
                'image' => $image_edit -> getClientoriginalName(),
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'product_quantity' => $product->product_quantity + (int) $request->quantity
            ];
        }
        else {
            $data = [
                'name' => $request->name,
                'price' => $request->price,
                'image' => $request->oldImage,
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'product_quantity' => $product->product_quantity + (int) $request->quantity
            ];
        }



        if (! $this->productRepository->update($id, $data)){
            return view('voxo_backends.edit_product', [
                'product' => $product,
                'brands' => $brands,
                'categories' => $categories
            ]);
        }

        return redirect()->route('all_products')->with('msg', 'success');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function searchName(Request $request)
    {
        $name = $request->searchName;
        $products = $this->productRepository->searchName($name);
        $categories = $this->categoryRepository->getAll();
        $brands = $this->brandRepository->getAll();

        return view('voxo_home.search', [
            'products' => $products,
            'categories' => $categories,
            'brands'=> $brands
        ]) ;
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function searchProduct(Request $request)
    {
        $products = $this->productRepository->searchProduct($request);
        $categories = $this->categoryRepository->getAll();
        $brands = $this->brandRepository->getAll();

        return view('voxo_home.search', [
            'products' => $products,
            'categories' => $categories,
            'brands'=> $brands
        ]) ;
    }

}
