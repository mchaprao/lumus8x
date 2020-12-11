<?php

use App\Http\Controllers\Admin\{
    PostController,
    CategoryController,
    UserController,
    RoleController,
    PlanController,
};
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function(){

    // DASHBOARD
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    // POSTS
    Route::resource('posts', PostController::class);

    // CATEGORIES
    Route::resource('categories', CategoryController::class);
    
    // USERS
    Route::resource('users', UserController::class);

    // PLANS
    Route::resource('plans', PlanController::class);

    // TENANTS
    Route::resource('tenants', TenantController::class);

    // ROLES
    Route::resource('roles', RoleController::class);
});
