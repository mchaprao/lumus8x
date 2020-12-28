<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\Plan;
use App\Models\Post;
use App\Models\WebEmpresa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $plans = Plan::with('details')->orderBy('price', 'ASC')->get();
        $carousels = Carousel::all();
        $webempresas = WebEmpresa::all();
        $posts = Post::all();

        return view('web.home', compact('plans', 'carousels', 'webempresas', 'posts'));
    }

    public function dashboard()
    {        
        return view('dashboard');
    }

    public function dashEte()
    {        
        return view('admin.dashboards.dash-ete');
    }

    public function dashDoc()
    {
        return view('admin.dashboards.dash-doc');
    }

    public function dashTec()
    {
        return view('admin.dashboards.dash-tec');
    }

    public function dashPortal()
    {
        return view('admin.dashboards.dash-portal');
    }

    public function dashLogin()
    {
        return view('admin.dashboards.dash-login');
    }
}
