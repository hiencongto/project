<?php

namespace App\Http\Controllers;

use App\Repositories\RepositoryInterface\UserRepositoryInterface;
use App\Repositories\RepositoryInterface\OrderRepositoryInterface;
use App\Repositories\RepositoryInterface\OrderDetailRepositoryInterface;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    protected $userRepository;
    protected $orderRepository;
    protected $orderDetailRepository;

    function __construct(
        UserRepositoryInterface $userRepository,
        OrderRepositoryInterface $orderRepository,
        OrderDetailRepositoryInterface $orderDetailRepository)
    {
        $this->userRepository = $userRepository;
        $this->orderRepository = $orderRepository;
        $this->orderDetailRepository = $orderDetailRepository;
    }

    public function login()
    {
        return view('voxo_home.login');
    }

    public function checkLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::guard('user')->attempt($credentials)) {
            return redirect()->route('home')->with('msg', 'success');
        }

        return redirect()->route('loginuser')->with('msg', 'Fail');
    }

    public function logout()
    {
        Auth::guard('user')->logout();
        session()->forget('cart');

        return redirect()->route('home')->with('msg', 'success');
    }

    public function register()
    {
        return view('voxo_home.register');
    }

    public function create (Request $request)
    {
        $confirmToken = rand(100000,999999);
        $data = [
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'address' => $request['address'],
            'password' => bcrypt($request['password']),
            'confirmToken' => $confirmToken
        ];

        if (! $this->userRepository->create($data)){
            return redirect()->back()->with('msg', 'fail');
        }

        $this->testMail($request['email'], $confirmToken);
    }

    public function list(){
        $users = $this->userRepository->getAll();

        return view('voxo_backends.all_users',[
           'users' => $users
        ]);
    }

    public function destroy(int $id){

        if (! $this->userRepository->find($id)){
            return redirect()->route('all_users')->with('msg', 'fail');
        }

        if (! $this->userRepository->delete($id)){
            return redirect()->route('all_users')->with('msg', 'fail');
        }

        return redirect()->route('all_users')->with('msg', 'oke r nhé');
    }

    public function show(int $id)
    {
        $user = $this->userRepository->find($id);

        if (! $user){
            redirect()->route('all_users')->with('msg', 'fail');
        }

        return view('voxo_backends.edit_user', [
           'user' => $user
        ]);
    }

    public function update(int $id, Request $request)
    {
        $user = $this->userRepository->find($id);
        if (! $user){
            return redirect()->route('all_users')->with('msg', 'fail');
        }

        $data = [
            'role' => $request['role'],
        ];

        $this->userRepository->update($id, $data);

        return redirect()->route('all_users')->with('msg', 'success');
    }

    public function dashboard()
    {
        $user =Auth::guard('user')->user();
        $id = $user->id;
        $orders = $this->orderRepository->findOrder($id);
        $orderDetail = [];

        foreach ($orders as $order)
        {
            $idOrder = $order->id;
            $orderDetail [$idOrder] =  $this->orderDetailRepository->detail($idOrder);
        }

        return view('voxo_home.user_dashboard', [
            'user' => $user,
            'orders' => $orders,
            'orderDetails' => $orderDetail
        ]);
    }

    public function updateProfile(Request $request)
    {
        $id = (int) $request->id;
        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
        ];

        if (! $this->userRepository->update($id, $data)){
            return redirect()->back()->with('msg', 'fail');
        }

        return redirect()->route('dashboard')->with('msg', 'success');
    }

    public function testMail($emailUser, $confirmToken)
    {
        if ($emailUser && $confirmToken){
            Mail::send('voxo_home.email', compact('emailUser', 'confirmToken'), function ($email) use($emailUser,$confirmToken){
                $email->subject('Confirm your email !!!');
                $email->to($emailUser, $confirmToken);
            });
        }
    }

    public function checkEmail(Request $request)
    {
        $code = (int) $request->confirmToken;
        $email = $request->email;
        $user = $this->userRepository->findUserByEmail($email);

        if ($user[0]->confirmToken == $code){
            if ($this->userRepository->updateStatusByEmail($email)){
                return redirect()->route('home')->with('msg', 'success');
            }

        }
    }

}
