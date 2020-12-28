<?php

namespace App\Providers;

use App\Models\{
    Carousel,
    Category,
    Plan,
    Post,
    Product,
    Tenant
};
use App\Observers\{
    CarouselObserver,
    CategoryObserver,
    PlanObserver,
    PostObserver,
    ProductObserver,
    TenantObserver
};
use Illuminate\Support\Facades\Schema;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Plan::observe(PlanObserver::class);
        Tenant::observe(TenantObserver::class);
        Category::observe(CategoryObserver::class);
        Product::observe(ProductObserver::class);
        Carousel::observe(CarouselObserver::class);
        Post::observe(PostObserver::class);
        
        /**
         * Custom If Statements
         */
        // Blade::if('admin', function () {
        //     $user = auth()->user();

        //     return $user->isAdmin();
        // });
    }
}
