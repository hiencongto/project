<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddBrandRequest;
use App\Repositories\RepositoryInterface\BrandRepositoryInterface;
use App\Repositories\RepositoryInterface\ProductRepositoryInterface;
use App\Repositories\RepositoryInterface\FeedbackRepositoryInterface;
use App\Repositories\RepositoryInterface\OrderDetailRepositoryInterface;
use App\Repositories\RepositoryInterface\WishlistRepositoryInterface;
use Illuminate\Http\Request;
use Session;

class BrandController extends Controller
{
    protected $brandRepository ;
    protected $productRepository;
    protected $feedbackRepository;
    protected $orderDetailRepository;
    protected $wishlistRepository;

    public function __construct(
        BrandRepositoryInterface $brandRepository,
        ProductRepositoryInterface $productRepository,
        FeedbackRepositoryInterface $feedbackRepository,
        OrderDetailRepositoryInterface $orderDetailRepository,
        WishlistRepositoryInterface $wishlistRepository)
    {
        $this->brandRepository = $brandRepository;
        $this->productRepository = $productRepository;
        $this->feedbackRepository = $feedbackRepository;
        $this->orderDetailRepository = $orderDetailRepository;
        $this->wishlistRepository = $wishlistRepository;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public  function viewAdd()
    {
        return view('voxo_backends.add_new_brand');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(AddBrandRequest $request)
    {
        if (! $request -> hasFile('image')){
            return view('voxo_backends.add_new_brand')->with('msg', 'Chọn file ảnh đê');
        }

        $image = $request -> file('image');
        $image_name = time(). '_'. $image -> getClientoriginalName();
        $storedPath = $image->move('images', $image_name);

        $data = [
            'name' => $request['name'],
            'image' => $image_name,
            'status' => $request->status
        ];

        if (! $this->brandRepository->create($data)){
            return view('voxo_backends.add_new_brand')->with('msg', 'fail');
        }

        return view('voxo_backends.add_new_brand')->with('msg', 'success');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function list()
    {
        $brands = $this->brandRepository->getAll();

        return view('voxo_backends.all_brands', [
            'brands' => $brands,
            'msg' => Session::get('msg')
            ]);
    }

    /**
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public  function destroy(int $id)
    {
        $products = $this->productRepository->getByBrandId($id);

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

        if (! $this->brandRepository->delete($id)){
            return redirect()->route('all_brands')->with('msg', 'fail');
        }

        return redirect()->route('all_brands')->with('msg', 'fail');
    }

    /**
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(int $id)
    {
        $brand = $this->brandRepository->find($id);
        if (! $brand){
            redirect()->route('all_brands')->with('msg', 'fail');
        }

        return view('voxo_backends.edit_brand',[
            'brand' => $brand
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
        $brand = $this->brandRepository->find($id);

        if (! $brand){
            redirect()->route()->with('msg', 'fail');
        }

        if ($request->hasFile('image')){
            $image_edit = $request -> file('image');
            $image_name = time() . '_' .$image_edit -> getClientoriginalName();
            $storedPath = $image_edit->move('images', $image_name);

            $data = [
                'name' => $request['name'],
                'image' => $image_name,
                'status' => $request['status']
            ];
        }
        else{
            $data = [
                'name' => $request['name'],
                'image' => $request->oldImage,
                'status' => $request['status']
            ];
        }


        if (! $this->brandRepository->update($id, $data)){
            return view('voxo_backends.edit_brand',[
                'brand' => $brand
            ]);
        }

        return redirect()->route('all_brands')->with('msg', 'success');
    }
}
