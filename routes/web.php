<?php

use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Admin\{
    AnalyzeController,
    PostController,
    CategoryController,
    UserController,
    PlanController,
    TenantController,
    ProductController,
    CategoryProductController,
    VisitController,
    CarouselController,
    ChartJsController,
    LaboratoryController,
    LocalAnalyzeController,
    ParameterAnalyzeController,
    UserTenantController,
    WebEmpresaController
};
use App\Http\Controllers\Admin\ACL\{    
    RoleController,
    ProperfilController,
    PermissionController,
    PermissionRoleController,
    PermissionProperfilController,
    PlanProperfilController,
    RoleUserController,
};
use Illuminate\Support\Facades\Route;

// WEB
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contato', [HomeController::class, 'contact'])->name('contact');
Route::post('/contato/sendEmail', [HomeController::class, 'sendEmail'])->name('sendEmail');
Route::get('/contato/sucesso', [HomeController::class, 'sendEmailSuccess'])->name('sendEmailSuccess');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function(){

    // ROTA DE TESTES
    Route::get('test-acl', function() {
        dd(auth()->user()->isAdmin());
    });

    // DASHBOARDS
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/dash-ete', [HomeController::class, 'dashEte'])->name('dash.ete');
    Route::get('/dash-doc', [HomeController::class, 'dashDoc'])->name('dash.doc');
    Route::get('/dash-tec', [HomeController::class, 'dashTec'])->name('dash.tec');
    Route::get('/dash-portal', [HomeController::class, 'dashPortal'])->name('dash.portal');

    Route::get('/dash-login', [HomeController::class, 'dashLogin'])->name('dash.login');

    // POSTS
    Route::resource('posts', PostController::class);

    // CATEGORIES
    Route::resource('categories', CategoryController::class);

    // Página da Web
    Route::resource('carousels', CarouselController::class);
    Route::resource('web-empresa', WebEmpresaController::class);
    
    // USERS       
    Route::resource('users', UserController::class);
    Route::resource('users-tenant', UserTenantController::class); 

    // CHARTJS
    Route::get('chartjs', [ChartJsController::class, 'index'])->name('chartjs.index'); 

    // PLANS
    Route::resource('plans', PlanController::class);

    // PRODUCTS
    Route::resource('products', ProductController::class);

    // Visits
    Route::resource('visits', VisitController::class);

    // TENANTS
    Route::resource('tenants', TenantController::class);

    // ROLES
    Route::resource('roles', RoleController::class);

    // PERFIS
    Route::resource('properfis', ProperfilController::class);

    // PERMISSIONS
    Route::resource('permissions', PermissionController::class);

    // PERMISSION x ROLE
    // Route::get('roles/{id}/permission/{idPermission}/detach', [PermissionRoleController::class, 'detachPermissionsRole'])->name('roles.permissions.detach');
    // Route::post('roles/{id}/permissions', [PermissionRoleController::class, 'attachPermissionsRole'])->name('roles.permissions.attach');
    // Route::get('roles/{id}/permissions/create', [PermissionRoleController::class, 'permissionsAvailable'])->name('roles.permissions.available');
    // Route::get('roles/{id}/permissions', [PermissionRoleController::class, 'permissions'])->name('roles.permissions');

    Route::get('roles/{id}/permission/{idPermission}/detach', [PermissionRoleController::class, 'detachPermissionsRole'])->name('roles.permissions.detach');
    Route::post('roles/{id}/permissions', [PermissionRoleController::class, 'attachPermissionsRole'])->name('roles.permissions.attach');
    Route::any('roles/{id}/permissions/create', [PermissionRoleController::class, 'permissionsAvailable'])->name('roles.permissions.available');
    Route::get('roles/{id}/permissions', [PermissionRoleController::class, 'permissions'])->name('roles.permissions');
    Route::get('permissions/{id}/role', [PermissionRoleController::class, 'roles'])->name('permissions.roles');

    // Plan x Perfil
    Route::get('plans/{id}/properfil/{idPerfil}/detach', [PlanProperfilController::class, 'detachPerfilPlan'])->name('plans.properfis.detach');
    Route::post('plans/{id}/properfis', [PlanProperfilController::class, 'attachPerfisPlan'])->name('plans.properfis.attach');
    Route::any('plans/{id}/properfis/create', [PlanProperfilController::class, 'properfisAvailable'])->name('plans.properfis.available');
    Route::get('plans/{id}/properfis', [PlanProperfilController::class, 'properfis'])->name('plans.properfis');
    Route::get('properfis/{id}/plans', [PlanProperfilController::class, 'plans'])->name('properfis.plans');

    // Permission x Perfil
    Route::get('properfis/{id}/permission/{idPermission}/detach', [PermissionProperfilController::class, 'detachPermissionProperfil'])->name('properfis.permissions.detach');
    Route::post('properfis/{id}/permissions', [PermissionProperfilController::class, 'attachPermissionProperfil'])->name('properfis.permissions.attach');
    Route::any('properfis/{id}/permissions/create', [PermissionProperfilController::class, 'permissionsAvailable'])->name('properfis.permissions.available');
    Route::get('properfis/{id}/permissions', [PermissionProperfilController::class, 'permissions'])->name('properfis.permissions');
    Route::get('permissions/{id}/properfis', [PermissionProperfilController::class, 'properfis'])->name('permissions.properfis');

    //  Product x Category
    Route::get('products/{id}/role/{idCategory}/detach', [CategoryProductController::class, 'detachCategoryProduct'])->name('products.category.detach');
    Route::post('products/{id}/categories', [CategoryProductController::class, 'attachCategoriesProduct'])->name('products.categories.attach');
    Route::any('products/{id}/categories/create', [CategoryProductController::class, 'categoriesAvailable'])->name('products.categories.available');
    Route::get('products/{id}/categories', [CategoryProductController::class, 'categories'])->name('products.categories');
    Route::get('categories/{id}/products', [CategoryProductController::class, 'products'])->name('categories.users');

    // Role x User
    Route::get('users/{id}/role/{idRole}/detach', [RoleUserController::class, 'detachRoleUser'])->name('users.roles.detach');
    Route::post('users/{id}/roles', [RoleUserController::class, 'attachRolesUser'])->name('users.roles.attach');
    Route::any('users/{id}/roles/create', [RoleUserController::class, 'rolesAvailable'])->name('users.roles.available');
    Route::get('users/{id}/roles', [RoleUserController::class, 'roles'])->name('users.roles');
    Route::get('roles/{id}/users', [RoleUserController::class, 'users'])->name('roles.users');

    // Laboratório
    Route::resource('parameters', ParameterAnalyzeController::class);
    Route::resource('analyzes', AnalyzeController::class);
    Route::resource('locations', LocalAnalyzeController::class);
    Route::resource('laboratories', LaboratoryController::class);

});

Route::fallback(function() {
    return view('404');
});