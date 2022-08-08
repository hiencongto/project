<?php

namespace App\Providers;

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
         \App\Repositories\RepositoryInterface\ProvinceRepositoryInterface::class => \App\Repositories\Repository\ProvinceRepository::class
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.front_voxo',function ($view){
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
    }
}
