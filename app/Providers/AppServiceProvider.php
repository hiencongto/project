<?php

namespace App\Providers;

use App\Models\Feedback;
use App\Models\Product;
use App\Repositories\Repository\WishlistRepository;
use App\Repositories\RepositoryInterface\ChapterRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Repositories\RepositoryInterface\ProductRepositoryInterface::class,
            \App\Repositories\Repository\ProductRepository::class
        );
    }

    public $bindings = [
        \App\Repositories\RepositoryInterface\ProductRepositoryInterface::class => \App\Repositories\Repository\ProductRepository::class,
        \App\Repositories\RepositoryInterface\CategoryRepositoryInterface::class => \App\Repositories\Repository\CategoryRepository::class,
        \App\Repositories\RepositoryInterface\UserRepositoryInterface::class => \App\Repositories\Repository\UserRepository::class,
        \App\Repositories\RepositoryInterface\BrandRepositoryInterface::class => \App\Repositories\Repository\BrandRepository::class,
        \App\Repositories\RepositoryInterface\OrderRepositoryInterface::class => \App\Repositories\Repository\OrderRepository::class,
        \App\Repositories\RepositoryInterface\OrderDetailRepositoryInterface::class => \App\Repositories\Repository\OrderDetailRepository::class,
         \App\Repositories\RepositoryInterface\DistrictRepositoryInterface::class => \App\Repositories\Repository\DistrictRepository::class,
         \App\Repositories\RepositoryInterface\ProvinceRepositoryInterface::class => \App\Repositories\Repository\ProvinceRepository::class,
        \App\Repositories\RepositoryInterface\WishlistRepositoryInterface::class => \App\Repositories\Repository\WishlistRepository::class,
        \App\Repositories\RepositoryInterface\FeedbackRepositoryInterface::class => \App\Repositories\Repository\FeedbackRepository::class,
        \App\Repositories\RepositoryInterface\ChapterRepositoryInterface::class => \App\Repositories\Repository\ChapterRepository::class
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.front_voxo', function ($view){
            $carts = session()->get('cart');
            $cartQuantity = 0;
            if (isset($carts)){
                $cartQuantity = count($carts);
            }
            view()->share([
               'carts' => $carts,
                'cartQuantity' => $cartQuantity
            ]);
        });

        view()->composer('voxo_home.product_detail', function ($view){
            $feedbacks = Feedback::orderBy('created_at', 'DESC')->get();
            if (isset($carts)){
                $cartQuantity = count($carts);
            }
            view()->share([
                'feedbacks' => $feedbacks,
            ]);
        });

        view()->composer('voxo_home.home', function ($view){
            $products = Product::all();

            view()->share([
                'products' => $products,
            ]);
        });
    }
}
