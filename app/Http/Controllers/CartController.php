<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Repositories\RepositoryInterface\ProductRepositoryInterface;

class CartController extends Controller
{
    public $productRepository;

    function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository= $productRepository;
    }

    public function addCart(Request $request)
    {
        $pattern = '/^\d+$/';
        $data = $request->query();
        $id = (int)$data['id'];
        $quantity = (int)$data['quantity'];
        $carts = Session::get('cart');

            if(preg_match($pattern, $quantity))
            {
                if ($quantity > 0)
                {
                    if (isset($carts[$id])) {
                        $carts[$id]['product_quantity'] += $quantity;
                    }
                    else{
                        $carts[$id] = array(
                            'product_id' => $id,
                            'product_quantity' => $quantity,
                            'product_size' => $data['size']
                        );
                    }
                    Session::put('cart', $carts);
                }
                else
                    return redirect()->back()->with('msg', 'âu no');
            }
            else
                return redirect()->back()->with('msg', 'âu no');
    }


    public function showCart()
    {
        $carts = Session::get('cart');

        if ($carts){
            foreach ($carts as $cart){
                $id = $cart['product_id'];
                $products = $this->productRepository->find($id);
                $carts[$id]['product_name'] = $products->name;
                $carts[$id]['product_price'] = (int)$products->price;
                $carts[$id]['product_image'] = $products->image;
            }
        }

        Session::put('cart', $carts);

        return view('voxo_home.cart',[
            'carts' => $carts
        ]);
    }

    public function deleteCart($id)
    {
        $carts = Session::get('cart');

        unset($carts[$id]);

        Session::put('cart', $carts);

        return redirect()->route('show.cart')->with('msg', 'oke');
    }

    public function deleteAllCart()
    {
        session()->forget('cart');

        return redirect()->route('show.cart')->with('msg', 'oke');
    }

    public function updateCart(Request $request)
    {
        $data = $request->all();
        $carts = Session::get('cart');

        if ($data['quantity'] >0){
            foreach ($carts as $cart){
                $id = $cart['product_id'];
                if ($id == (int)$data['id']){
                    $carts[$id]['product_quantity']=(int)$data['quantity'];
                }
            }
            Session::put('cart', $carts);
        }
    }

    public function miniCart()
    {
        return view('layouts.front_voxo');
    }

    public function showMiniCart()
    {
        $carts = Session::get('cart');

        if ($carts){
            foreach ($carts as $cart){
                $id = $cart['product_id'];
                $products = $this->productRepository->find($id);
                $carts[$id]['product_name'] = $products->name;
                $carts[$id]['product_price'] = (int)$products->price;
                $carts[$id]['product_image'] = $products->image;
            }
        }
        Session::put('cart', $carts);

        return view('layouts.front_voxo',[
            'carts'=> $carts
        ]);
    }
}
