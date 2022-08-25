<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\EmailRequest;
use App\Repositories\RepositoryInterface\UserRepositoryInterface;
use App\Repositories\RepositoryInterface\OrderRepositoryInterface;
use App\Repositories\RepositoryInterface\OrderDetailRepositoryInterface;
use App\Repositories\RepositoryInterface\WishlistRepositoryInterface;
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
    protected $wishlistRepository;

    function __construct(
        UserRepositoryInterface $userRepository,
        OrderRepositoryInterface $orderRepository,
        OrderDetailRepositoryInterface $orderDetailRepository,
        WishlistRepositoryInterface $wishlistRepository)
    {
        $this->userRepository = $userRepository;
        $this->orderRepository = $orderRepository;
        $this->orderDetailRepository = $orderDetailRepository;
        $this->wishlistRepository = $wishlistRepository;
    }

    public function login()
    {
        return view('voxo_home.login');
    }

    public function checkLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::guard('user')->attempt($credentials)) {

            if ($this->userRepository->checkStatusUser($request->email)->toArray()[0]['status'] == 0) {
                return redirect()->back()->with('statusLogin', 'Please confirm your email !');
            }

            if ($this->userRepository->checkRoleUser($request->email)[0]['role'] == 'admin') {
                return redirect()->route('all_users');
            }

            return redirect()->route('home')->with('msg', 'success');
        }

        else {
            return redirect()->back()->with('statusLogin', 'Email or password is incorrect');
        }

    }

    public function logout()
    {
        $user = Auth::guard('user')->user();

        if ($carts = Session::get('cart')) {
            foreach ($carts as $cart) {
                if ( ! $this->wishlistRepository->checkWishlist($user->id, $cart['product_id'])) {
                    $data = [
                        'user_id' => $user->id,
                        'product_id' => $cart['product_id']
                    ];
                    $this->wishlistRepository->create($data);
                }
            }
        }
        Auth::guard('user')->logout();
        session()->forget('cart');

        return redirect()->route('home')->with('msg', 'success');
    }

    public function logoutAdmin()
    {
        Auth::guard('user')->logout();

        return redirect()->route('home')->with('msg', 'success');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function register()
    {
        return view('voxo_home.register');
    }

    /**
     * @param RegisterRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function create (RegisterRequest $request)
    {
        if ($this->userRepository->checkExistEmail($request->email)){
            return redirect()->back()->with('statusRegister', 'An account already exists with this email address.');
        }

        $confirmToken = rand(100000, 999999);

        $data = [
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'address' => $request['address'],
            'password' => bcrypt($request['password']),
            'confirmToken' => $confirmToken
        ];

        if (! $this->userRepository->create($data)) {
            return redirect()->back()->with('msg', 'fail');
        }

        $this->testMail($request['email'], $confirmToken);

        return redirect()->route('afteregister')->with('msg', 'success');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function afterRegister(){
        return view('voxo_home.after_register');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function list(){
        $users = $this->userRepository->getAll();

        return view('voxo_backends.all_users',[
           'users' => $users
        ]);
    }

    /**
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id){

        if (! $this->userRepository->find($id)){
            return redirect()->route('all_users')->with('msg', 'fail');
        }

        if (! $this->userRepository->delete($id)){
            return redirect()->route('all_users')->with('msg', 'fail');
        }

        return redirect()->route('all_users')->with('msg', 'oke r nhé');
    }

    /**
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
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

    /**
     * @param int $id
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
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

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * @param $emailUser
     *
     * @param $confirmToken
     *
     * @return void
     */
    public function testMail($emailUser, $confirmToken)
    {
        if ($emailUser && $confirmToken){
            Mail::send('voxo_home.email', compact('emailUser', 'confirmToken'), function ($email) use($emailUser,$confirmToken){
                $email->subject('Confirm your email !!!');
                $email->to($emailUser, $confirmToken);
            });
        }
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function checkEmail(Request $request)
    {
        $code = (int) $request->confirmToken;
        $email = $request->email;
        $user = $this->userRepository->findUserByEmail($email);

        if ($user[0]->confirmToken == $code){
            if ($this->userRepository->updateStatusByEmail($email)){
                return redirect()->route('loginuser')->with('msg', 'success');
            }

        }
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function viewResetPassword()
    {
        return view('voxo_home.email_to_reset');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function afterResetPassword()
    {
        return view('voxo_home.after_forgot');
    }

    /**
     * @param EmailRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function mailResetPassword(EmailRequest $request)
    {
        $token = $request->_token;
        $emailUser = $request->email;

        Session::put('tokenReset', $token);

        Mail::send('voxo_home.email_reset_password', compact('token', 'emailUser'), function ($email) use($emailUser){
            $email->subject('Confirm your email !!!');
            $email->to($emailUser);
        });

        return redirect()->route('afterResetPassword');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     */
    public function checkMailReset(Request $request)
    {
        $token = Session::get('tokenReset');

        if ($token == $request->token) {
            return view('voxo_home.reset_password',[
                'email' => $request->email
            ]);
        }
    }

    /**
     * @param ChangePasswordRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changePassword(ChangePasswordRequest $request)
    {
        if ($request->password == $request->confirmPassword) {
            if (! $this->userRepository->changePasswordByEmail($request->email, $request->password)) {

                return redirect()->back()->with('statusChangePassword', 'Please try again !');
            }

            return redirect()->route('login');
        }

        return redirect()->back()->with('statusChangePassword', 'Please try again !');
    }
}
