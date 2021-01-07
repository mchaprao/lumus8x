<?php

namespace App\Providers;

use App\Models\{
    Analyze,
    Carousel,
    Category,
    Plan,
    Post,
    Product,
    ReportEte,
    ReportType,
    Tenant,
    Visit
};
use App\Observers\{
    AnalyzeObserver,
    CarouselObserver,
    CategoryObserver,
    PlanObserver,
    PostObserver,
    ProductObserver,
    ReportEteObserver,
    ReportTypeObserver,
    TenantObserver,
    VisitObserver
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
        Analyze::observe(AnalyzeObserver::class);
        Visit::observe(VisitObserver::class);
        ReportEte::observe(ReportEteObserver::class);
        
        /**
         * Custom If Statements
         */
        // Blade::if('admin', function () {
        //     $user = auth()->user();

        //     return $user->isAdmin();
        // });
    }
}
