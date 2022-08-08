<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Repositories\RepositoryInterface\UserRepositoryInterface;
use App\Repositories\RepositoryInterface\BrandRepositoryInterface;
use App\Repositories\RepositoryInterface\CategoryRepositoryInterface;
use App\Repositories\RepositoryInterface\ProductRepositoryInterface;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    protected $userRepository;
    protected $brandRepository;
    protected $categoryRepository;
    protected $productRepository;

    function __construct(UserRepositoryInterface $userRepository, BrandRepositoryInterface $brandRepository, CategoryRepositoryInterface $categoryRepository, ProductRepositoryInterface $productRepository){
        $this->userRepository = $userRepository;
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->brandRepository = $brandRepository;
    }

    public function home()
    {
        return view('voxo_home.home');
    }

    public function productlist()
    {
        $products = $this->productRepository->getAll();
        $brands = $this->brandRepository->getAll();
        $categories = $this->categoryRepository->getAll();
        return view('voxo_home.product_list',[
            'products' => $products,
            'brands' => $brands,
            'categories' => $categories
        ]);
    }

    public function productDetail($id){
        $product = $this->productRepository->find($id);

        return view('voxo_home.product_detail', [
           'product' => $product
        ]);
    }

    public function orderSuccess(){
        return view('voxo_home.order_success');
    }

    public function testMail()
    {
        $name = 'Hien Nguyen Tat';
        Mail::send('voxo_home.email', compact('name'), function ($email) use($name){
            $email->subject('demotest');
            $email->to('hienahihi111@gmail.com',$name);
        });
    }
}
