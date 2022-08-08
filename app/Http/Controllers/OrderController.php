<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Repositories\RepositoryInterface\OrderRepositoryInterface;
use App\Repositories\RepositoryInterface\DistrictRepositoryInterface;
use App\Repositories\RepositoryInterface\OrderDetailRepositoryInterface;
use App\Repositories\RepositoryInterface\ProvinceRepositoryInterface;

class OrderController extends Controller
{
    protected $orderRepository;
    protected $orderDetailRepository;
    protected $districtRepository;
    protected $provinceRepository;

    public function __construct(OrderRepositoryInterface $orderRepository, OrderDetailRepositoryInterface $orderDetailRepository, DistrictRepositoryInterface $districtRepository, ProvinceRepositoryInterface $provinceRepository)
    {
        $this->orderRepository = $orderRepository;
        $this->orderDetailRepository = $orderDetailRepository;
        $this->districtRepository = $districtRepository;
        $this->provinceRepository = $provinceRepository;
    }

     public function checkOut(){
        $carts = Session::get('cart');
        $districts = $this->districtRepository->getAll();
        $provinces = $this->provinceRepository->getAll();

        return view('voxo_home.checkout',[
            'districts' => $districts,
            'provinces' => $provinces,
            'carts' => $carts,
        ]);
    }

    public function createOrder(Request $request)
    {
        $user = Auth::guard('user')->user();

        $data = [
            'user_id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
            'address' => $request['address'] . $request['district'] . $request['province'],
            'amount' => (int) $request['quantity'],
            'note' => $request['note']
        ];

        if (! $order = $this->orderRepository->create($data))
        {
            return redirect()->back()->with('msg', 'fail');
        }

        $this->creatOrderDetail($order->id);

        return redirect()->route('order.success')->with('msg', 'success');
    }

    public function creatOrderDetail($id)
    {
        $carts = Session::get('cart');

        if($carts) {
            foreach ($carts as $cart)
            {
                $data = [
                    'order_id' => $id,
                    'product_id' => $cart['product_id'],
                    'quantity' => $cart['product_quantity'],
                    'total_money' => $cart['product_price']*$cart['product_quantity']
                ];
                if (! $this->orderDetailRepository->create($data)){
                    return redirect()->route('add.order')->with('msg', 'fail');
                }
            }
        }

        session()->forget('cart');
    }

    public function view()
    {
        $orders = $this->orderRepository->getAll();

        return view('voxo_backends.order_list',[
            'orders' => $orders
        ]);
    }

    public function show(int $id)
    {
        $order = $this->orderRepository->find($id);

        return view('voxo_backends.edit_order',[
            'order' => $order
        ]);
    }

    public function update(int $id,Request $request)
    {
        $status = $request->status;

        $data = [
          'status' => $status
        ];

        if(! $this->orderRepository->update($id, $data))
        {
            return redirect()->back()->with('msg', 'fail');
        }

        return redirect()->route('list_order')->with('msg', 'success');
    }

    public function delete(int $id)
    {
        $orderDetails = $this->orderDetailRepository->getAll();

        foreach ($orderDetails as $orderDetail) {
            if($orderDetail->order->id == $id)
            {
                if (! $this->orderDetailRepository->delete($orderDetail->id))
                {
                    return redirect()->back()->with('msg', 'fail');
                }
            }
        }

        if (! $this->orderRepository->delete($id))
        {
            return redirect()->back()->with('msg', 'fail');
        }

        return redirect()->route('list_order')->with('msg', 'success');
    }

    public function detail($id)
    {
        $orderDetails = $this->orderDetailRepository->detail($id);
        $order = $this->orderRepository->find($id);

        return view('voxo_backends.detail_order', [
            'order' => $order,
           'orderDetails' => $orderDetails
        ]);
    }
}
