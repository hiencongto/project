<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
Route::get('c', function (){
    return view('voxo_backends.detail_order');
});

Route::prefix('categories')->group(function (){
    Route::get('/add', [CategoryController::class, 'viewAdd']);
    Route::post('/add', [CategoryController::class, 'create']);
    Route::get('/list', [CategoryController::class, 'list'])->name('list');
    Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('delete');
    Route::get('/edit/{id}', [CategoryController::class, 'show'])->name('show');
    Route::post('/edit/{id}', [CategoryController::class, 'update']);
});

//Route::prefix('brands')->group(function (){
//    Route::get('/add',[BrandController::class, 'viewAdd']);
//    Route::post('/add',[BrandController::class, 'create']);
//    Route::get('/list', [BrandController::class, 'list'])->name('listbrand');
//    Route::get('/delete/{id}', [BrandController::class, 'destroy'])->name('deletebrand');
//    Route::get('/edit/{id}', [BrandController::class, 'show'])->name('showbrand');
//    Route::post('/edit/{id}', [BrandController::class, 'update']);
//});

//Route::prefix('products/')->group(function (){
//    Route::get('/add', [ProductController::class, 'viewAdd']);
//    Route::post('/add', [ProductController::class, 'create']);
//    Route::get('list', [ProductController::class, 'list'])->name('listproduct');
//    Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name('deleteproduct');
//    Route::get('/edit/{id}', [ProductController::class, 'show'])->name('showproduct');
//    Route::post('/edit/{id}', [ProductController::class, 'update']);
//
//});

Route::prefix('/')->group(function (){
    Route::get('login', [UserController::class, 'login'])->name('loginuser');
    Route::post('login', [UserController::class, 'checkLogin']);
    Route::get('register', [UserController::class, 'register'])->name('registeruser');
    Route::post('register', [UserController::class, 'create']);
    Route::get('profile', [UserController::class, 'list'])->name('listuser');
    Route::get('delete/{id}', [UserController::class, 'destroy'])->name('deleteuser');
    Route::get('edit/{id}', [UserController::class, 'show'])->name('showuser');
    Route::post('edit/{id}', [UserController::class, 'update']);


//    Route::get('product-list', [ProductController::class, 'list'])->name('listproduct');
//    Route::get('product_detail', [ProductController::class, 'detail'])->name('detailproduct');


});
Route::get('', [HomeController::class, 'home'])->name('home');
Route::get('TEST_MAIL', [HomeController::class, 'testMail'])->name('mail');

//login
Route::prefix('user')->group(function (){
    Route::get('login', [UserController::class, 'login'])->name('login');
    Route::post('login', [UserController::class, 'checkLogin'])->name('check.login');
    Route::get('register', [UserController::class, 'register']);
    Route::post('register', [UserController::class, 'create'])->name('register');
    Route::get('logout', [UserController::class, 'logout'])->name('logout');

    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
//    Route::get('updateProfile', [UserController::class, 'update'])->name()
    Route::get('updateProfile', [UserController::class, 'updateProfile'])->name('updateProfile');
});

//shop
Route::prefix('product')->group(function (){
    Route::get('product_list', [HomeController::class, 'productlist'])->name('productlist');
    Route::get('product_detail/{id}', [HomeController::class, 'productDetail'])->name('productdetail');
});

//cart
Route::get('addcart', [CartController:: class, 'addCart'])->name('addCart');
Route::get('cartlist', [CartController::class, 'showCart'])->name('show.cart');
Route::get('cartdelete/{id}', [CartController::class, 'deleteCart'])->name('delete.cart');
Route::get('cartalldelete', [CartController::class, 'deleteAllCart'])->name('delete.all.cart');
Route::get('cartupdate', [CartController::class, 'updateCart'])->name('update.cart');
//miniCart
Route::get('minicartupdate', [CartController::class, 'miniCart'])->name('minicart');
Route::get('addminicart', [CartController:: class, 'showMiniCart'])->name('showminicart');

//order
Route::prefix('order')->group(function (){
    Route::get('add_new_order', [OrderController::class, 'checkOut'])->name('add.order');
    Route::post('add_new_order', [OrderController::class, 'createOrder']);
    Route::get('order_success', [HomeController::class, 'orderSuccess'])->name('order.success');
//    Route::get('add_new_order', [OrderController::class, 'creatOrderDetail'])

});



Route::prefix('admin')->group(function (){
    //user
    Route::get('add_new_user', [UserController::class, 'addNew'])->name('add_user');
    Route::post('add_new_user', [UserController::class, 'create']);
    Route::get('all_users', [UserController::class, 'list'])->name('all_users');
    Route::get('edit_user/{id}', [UserController::class, 'show'])->name('show_user');
    Route::post('edit_user/{id}', [UserController::class, 'update']);
    Route::get('delete_user/{id}', [UserController::class, 'destroy'])->name('delete_user');
    //product
    Route::get('add_new_product', [ProductController::class, 'viewAdd'])->name('add_product');
    Route::post('add_new_product', [ProductController::class, 'create']);
    Route::get('list_products', [ProductController::class, 'list'])->name('all_products');
    Route::get('delete_product/{id}', [ProductController::class, 'destroy'])->name('delete_product');
    Route::get('edit_product/{id}', [ProductController::class, 'show'])->name('show_product');
    Route::post('edit_product/{id}', [ProductController::class, 'update']);
    //brand
    Route::get('add_new_brand',[BrandController::class, 'viewAdd'])->name('add_brand');
    Route::post('add_new_brand',[BrandController::class, 'create']);
    Route::get('list_brands', [BrandController::class, 'list'])->name('all_brands');
    Route::get('delete_brand/{id}', [BrandController::class, 'destroy'])->name('delete_brand');
    Route::get('edit_brand/{id}', [BrandController::class, 'show'])->name('show_brand');
    Route::post('edit_brand/{id}', [BrandController::class, 'update']);
    //category


    //order
    Route::get('list_order', [OrderController::class, 'view'])->name('list_order');
    Route::get('edit_order/{id}', [OrderController::class, 'show'])->name('edit_order');
    Route::post('edit_order/{id}', [OrderController::class, 'update']);
    Route::get('delete_order/{id}', [OrderController::class, 'delete'])->name('delete_order');
    Route::get('detail_order/{id}', [OrderController::class, 'detail'])->name('detail_order');
});
































