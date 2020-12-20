<?php

namespace App\Providers;

use App\Models\{
    Category,
    Plan,
    Product,
    Tenant
};
use App\Observers\{
    CategoryObserver,
    PlanObserver,
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
        
        /**
         * Custom If Statements
         */
        // Blade::if('admin', function () {
        //     $user = auth()->user();

        //     return $user->isAdmin();
        // });
    }
}
