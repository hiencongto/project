<?php

namespace App\Http\Controllers;

use App\Repositories\RepositoryInterface\ProductRepositoryInterface;
use App\Repositories\RepositoryInterface\BrandRepositoryInterface;
use App\Repositories\RepositoryInterface\CategoryRepositoryInterface;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    protected $productRepository;
    protected $categoryRepository;
    protected $brandRepository;

    public function __construct(ProductRepositoryInterface $productRepository, CategoryRepositoryInterface $categoryRepository, BrandRepositoryInterface $brandRepository)
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->brandRepository = $brandRepository;
    }

    public function viewAdd()
    {
        $categories = $this->categoryRepository->getAll();
        $brands = $this->brandRepository->getAll();

        return view('voxo_backends.add_new_product', [
            'categories' => $categories,
            'brands' => $brands
        ]);
    }

    public function create(Request $request)
    {
        $categories = $this->categoryRepository->getAll();
        $brands = $this->brandRepository->getAll();

        if (! $request -> hasFile('image')){
            return view('voxo_backends.add_new_product')->with('msg', 'Chọn file ảnh đê');
        }

        $image = $request -> file('image');
        $image_name =$image -> getClientoriginalName();
//        $image->move(resource_path('image', $image_name));
        $storedPath = $image->move('images', $image_name);
        $data = [
            'name' => $request['name'],
            'price' => $request['price'],
            'image' => $image -> getClientoriginalName(),
            'category_id' => $request['category_id'],
            'brand_id' => $request['brand_id']
        ];

        if(! $this->productRepository->create($data)){
            return view('voxo_backends.add_new_product', [
                'categories' => $categories,
                'brands' => $brands
            ]);
        }

        return view('voxo_backends.add_new_product', [
            'categories' => $categories,
            'brands' => $brands
        ]);

    }

    public function list()
    {
        $products = $this->productRepository->getAll();
        $categories = $this->categoryRepository->getAll();
        $brands = $this->brandRepository->getAll();

        return view('voxo_backends.all_products',[
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands
        ]);

    }

    public function destroy(int $id)
    {
        $product = $this->productRepository->find($id);

        if (! $product){
            return redirect()-> route('all_products')->with('msg', 'fail');
        }

        if (! $this->productRepository->delete($id)){
            return redirect()-> route('all_products')->with('msg', 'fail');
        }

        return redirect()-> route('all_products')->with('msg', 'success');
    }

    public function show(int $id)
    {
        $brands = $this->brandRepository->getAll();
        $categories = $this->categoryRepository->getAll();
        $product = $this->productRepository->find($id);
        if(! $product){
            return redirect()-> route('all_products')->with('msg', 'fail');
        }

        return view('voxo_backends.edit_product', [
            'product' => $product,
            'brands' => $brands,
            'categories' => $categories
        ]);
    }

    public function update(int $id, Request $request)
    {
        $brands = $this->brandRepository->getAll();
        $categories = $this->categoryRepository->getAll();
        $product = $this->productRepository->find($id);

        if(! $product){
            redirect()->route('all_product')->with('msg', 'fail');
        }

        if (! $request -> hasFile('image')){
            return view('voxo_backends.edit_product', [
                'product' => $product,
                'brands' => $brands,
                'categories' => $categories
            ]);
        }

        $image_edit = $request -> file('image');
        $image_name =$image_edit -> getClientoriginalName();
        $storedPath = $image_edit->move('images', $image_name);

        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'image' => $image_edit -> getClientoriginalName(),
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id
        ];

        if (! $this->productRepository->update($id, $data)){
            return view('voxo_backends.edit_product', [
                'product' => $product,
                'brands' => $brands,
                'categories' => $categories
            ]);
        }

        return redirect()->route('all_products')->with('msg', 'success');

    }

}
