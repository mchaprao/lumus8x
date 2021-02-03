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
        // $posts = Post::orderBy('title', 'ASC')->limit(3)->get();
        $posts = Post::where('category_id', '=', 3)->orderBy('title', 'ASC')->limit(6)->get();

        return view('web.home', compact('plans', 'carousels', 'webempresas', 'posts'));
    }

    public function blog()
    {
        $posts = Post::orderBy('title', 'ASC')->limit(3)->get();

        return view('web.blog', compact('posts'));
    }

    public function article($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('web.article', compact('post'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function company()
    {
        return view('web.company');
    }

    public function services()
    {
        $posts = Post::where('category_id', '=', 3)->orderBy('title', 'ASC')->get();

        return view('web.services', compact('posts'));
    }

    public function dashEte()
    {
        $graficoE = [
            'Temperatura ºC' => 31.2,
            'pH' => 8,
            'DBO5' => 90,
            'DQO' => 639,
        ];

        $graficoS = [
            'pH' => 7.8,
            'DBO5' => 90,
            'DQO' => 639,
            'O&G' => 14.5,
            'Coliformes Totais' => 1600,
            'Col. Termotolerantes' => 1600,
        ];

        $labelsE = json_encode(array_keys($graficoE));
        $valuesE = json_encode(array_values($graficoE));
        $labelsS = json_encode(array_keys($graficoS));
        $valuesS = json_encode(array_values($graficoS));

        return view('admin.dashboards.dash-ete', compact('labelsE', 'valuesE', 'labelsS', 'valuesS'));
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
