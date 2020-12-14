<?php

use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Admin\{
    PostController,
    CategoryController,
    UserController,
    PlanController,
    TenantController,
    ProductController,
    CategoryProductController,
};
use App\Http\Controllers\Admin\ACL\{    
    RoleController,
    PermissionController,
    PermissionRoleController,
    PlanRoleController,
};
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

    // PRODUCTS
    Route::resource('products', ProductController::class);

    // TENANTS
    Route::resource('tenants', TenantController::class);

    // ROLES
    Route::resource('roles', RoleController::class);

    // PERMISSIONS
    Route::resource('permissions', PermissionController::class);

    // PERMISSION x ROLE
    Route::get('roles/{id}/permission/{idPermission}/detach', [PermissionRoleController::class, 'detachPermissionsRole'])->name('roles.permissions.detach');
    Route::post('roles/{id}/permissions', [PermissionRoleController::class, 'attachPermissionsRole'])->name('roles.permissions.attach');
    Route::get('roles/{id}/permissions/create', [PermissionRoleController::class, 'permissionsAvailable'])->name('roles.permissions.available');
    Route::get('roles/{id}/permissions', [PermissionRoleController::class, 'permissions'])->name('roles.permissions');

    // ROLE x PERMISSION
    Route::get('permissions/{id}/roles/{idRole}/detach', [PermissionRoleController::class, 'detachRolesPermission'])->name('permissions.roles.detach');
    Route::post('permissions/{id}/roles', [PermissionRoleController::class, 'attachRolesPermission'])->name('permissions.roles.attach');
    Route::get('permissions/{id}/roles/create', [PermissionRoleController::class, 'rolesAvailable'])->name('permissions.roles.available');
    Route::get('permissions/{id}/roles', [PermissionRoleController::class, 'roles'])->name('permissions.roles');

    // PLAN x ROLE
    Route::get('plans/{id}/role/{idProfile}/detach', [PlanRoleController::class, 'detachRolePlan'])->name('plans.roles.detach');
    Route::post('plans/{id}/roles', [PlanRoleController::class, 'attachRolesPlan'])->name('plans.roles.attach');
    Route::any('plans/{id}/roles/create', [PlanRoleController::class, 'rolesAvailable'])->name('plans.roles.available');
    Route::get('plans/{id}/roles', [PlanRoleController::class, 'roles'])->name('plans.roles');
    Route::get('roles/{id}/plans', [PlanRoleController::class, 'plans'])->name('roles.plans');

    //  Product x Category
    Route::get('products/{id}/role/{idCategory}/detach', [CategoryProductController::class, 'detachCategoryProduct'])->name('products.category.detach');
    Route::post('products/{id}/categories', [CategoryProductController::class, 'attachCategoryProduct'])->name('products.categories.attach');
    Route::any('products/{id}/categories/create', [CategoryProductController::class, 'categoriesAvailable'])->name('products.categories.available');
    Route::get('products/{id}/categories', [CategoryProductController::class, 'categories'])->name('products.categories');
    Route::get('categories/{id}/products', [CategoryProductController::class, 'products'])->name('categories.products');

});
