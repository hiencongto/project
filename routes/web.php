<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\FeedbackController;

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
    return view('voxo_home.wishlist');
});

Route::get('add_story', [StoryController::class, 'view'])->name('create');
Route::post('add_story', [StoryController::class, 'create']);
Route::get('list', [StoryController::class, 'list']);
Route::get('add-chapter', [ChapterController::class, 'viewAdd'])->name('addChapter');
Route::post('add-chapter', [ChapterController::class, 'addChapter']);
Route::get('all-chapter/{id}', [ChapterController::class, 'list'])->name('allChapter');
Route::get('delete-chapter/{id}/{id2}', [ChapterController::class, 'destroy'])->name('deleteChapter');


Route::prefix('/')->group(function (){
    Route::get('login', [UserController::class, 'login'])->name('loginuser');
    Route::post('login', [UserController::class, 'checkLogin']);
    Route::get('register', [UserController::class, 'register'])->name('registeruser');
    Route::post('register', [UserController::class, 'create']);
    Route::get('after-register', [UserController::class, 'afterRegister'])->name('afteregister');
    Route::get('profile', [UserController::class, 'list'])->name('listuser');
    Route::get('delete/{id}', [UserController::class, 'destroy'])->name('deleteuser');
    Route::get('edit/{id}', [UserController::class, 'show'])->name('showuser');
    Route::post('edit/{id}', [UserController::class, 'update']);


});
Route::get('', [HomeController::class, 'home'])->name('home');
Route::get('entercode', [UserController::class, 'checkEmail'])->name('checkEmail');
Route::get('TEST-MAIL', [UserController::class, 'testMail'])->name('mail');
Route::get('searchName', [ProductController::class, 'searchName'])->name('searchName');
Route::get('searchProduct', [ProductController::class, 'searchProduct'])->name('searchProduct');



//login
Route::prefix('user')->group(function (){
    Route::get('login', [UserController::class, 'login'])->name('login');
    Route::post('login', [UserController::class, 'checkLogin'])->name('check.login');
    Route::get('register', [UserController::class, 'register']);
    Route::post('register', [UserController::class, 'create'])->name('register');
    Route::get('logout', [UserController::class, 'logout'])->name('logout');

    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('updateProfile', [UserController::class, 'updateProfile'])->name('updateProfile');
    Route::get('resetPassword', [UserController::class, 'viewResetPassword'])->name('resetPassword');
    Route::post('resetPassword', [UserController::class, 'mailResetPassword']);
    Route::get('after-rest', [UserController::class, 'afterResetPassword'])->name('afterResetPassword');
    Route::get('form-reset', [UserController::class, 'checkMailReset'])->name('checkMailReset');
    Route::get('enter-new-password', [UserController::class, 'changePassword'])->name('enterNewPassword');

});

//product
Route::prefix('product')->group(function (){
    Route::get('product-list', [HomeController::class, 'productlist'])->name('productlist');
    Route::get('product-detail/{id}', [HomeController::class, 'productDetail'])->name('productdetail');
    Route::get('product-search-name', [ProductController::class, 'searchName'])->name('searchProductName');
    Route::get('product-search-brand-category', [ProductController::class, 'searchProduct'])->name('searchProduct');
    Route::get('product-feedback', [FeedbackController::class, 'create'])->name('productFeedback');
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
    Route::get('add-new-order', [OrderController::class, 'checkOut'])->name('add.order');
    Route::post('add-new-order', [OrderController::class, 'createOrder']);
    Route::get('order-success', [HomeController::class, 'orderSuccess'])->name('order.success');
});

//wishlist
Route::get('add-wishlist', [WishlistController::class, 'creat'])->name('add.wishlist');
Route::get('list-wishlist', [WishlistController::class, 'list'])->name('list.wishlist');
Route::get('delete-wishlist/{id}', [WishlistController::class, 'destroy'])->name('delete.wishlist');



Route::middleware(['checklogin'])->group(function () {
    Route::prefix('admin')->group(function (){
        //user
        Route::get('add-new-user', [UserController::class, 'addNew'])->name('add_user');
        Route::post('add-new-user', [UserController::class, 'create']);
        Route::get('all-users', [UserController::class, 'list'])->name('all_users');
        Route::get('edit-user/{id}', [UserController::class, 'show'])->name('show_user');
        Route::post('edit-user/{id}', [UserController::class, 'update']);
        Route::get('delete-user/{id}', [UserController::class, 'destroy'])->name('delete_user');
        //product
        Route::get('add-new-product', [ProductController::class, 'viewAdd'])->name('add_product');
        Route::post('add-new-product', [ProductController::class, 'create']);
        Route::get('list-products', [ProductController::class, 'list'])->name('all_products');
        Route::get('delete-product/{id}', [ProductController::class, 'destroy'])->name('delete_product');
        Route::get('edit-product/{id}', [ProductController::class, 'show'])->name('show_product');
        Route::post('edit-product/{id}', [ProductController::class, 'update']);
        //brand
        Route::get('add-new-brand',[BrandController::class, 'viewAdd'])->name('add_brand');
        Route::post('add-new-brand',[BrandController::class, 'create']);
        Route::get('list-brands', [BrandController::class, 'list'])->name('all_brands');
        Route::get('delete-brand/{id}', [BrandController::class, 'destroy'])->name('delete_brand');
        Route::get('edit-brand/{id}', [BrandController::class, 'show'])->name('show_brand');
        Route::post('edit-brand/{id}', [BrandController::class, 'update']);
        //category
        Route::get('add-new-category', [CategoryController::class, 'viewAdd'])->name('add_category');
        Route::post('add-new-category', [CategoryController::class, 'create']);
        Route::get('list-categories', [CategoryController::class, 'list'])->name('all_categories');
        Route::get('delete-category/{id}', [CategoryController::class, 'destroy'])->name('delete_category');
        Route::get('edit-category/{id}', [CategoryController::class, 'show'])->name('show_category');
        Route::post('edit-category/{id}', [CategoryController::class, 'update']);
        //order
        Route::get('list-order', [OrderController::class, 'view'])->name('list_order');
        Route::get('edit-order/{id}', [OrderController::class, 'show'])->name('edit_order');
        Route::post('edit-order/{id}', [OrderController::class, 'update']);
        Route::get('delete-order/{id}', [OrderController::class, 'delete'])->name('delete_order');
        Route::get('detail-order/{id}', [OrderController::class, 'detail'])->name('detail_order');
        //logout
        Route::get('log-out-admin', [UserController::class, 'logoutAdmin'])->name('logout_admin');
    });
});
































