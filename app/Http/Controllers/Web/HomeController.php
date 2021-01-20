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
        $posts = Post::orderBy('title', 'ASC')->get();        

        return view('web.home', compact('plans', 'carousels', 'webempresas', 'posts'));
    }

    public function blog()
    {
        $posts = Post::orderBy('title', 'ASC')->limit(3)->get();

        return view('web.blog', compact('posts'));
    }

    public function article()
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
        return view('web.services');
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function sendEmail(Request $request)
    {
        // $data = [
        //     'reply_name' => $request->name,
        //     'reply_email' => $request->email,
        //     'cell' => $request->cell,
        //     'message' => $request->message
        // ];

        // Mail::send(new Contact($data));

        // return redirect()->route('sendEmailSuccess');
    }

    public function sendEmailSuccess()
    {
        return view('web.contact_success');
    }

    public function dashEte()
    { 
        $grafico = [
            'Teste 1' => 100,
            'Teste 2' => 300,
            'Teste 3' => 200,
            'Teste 4' => 400,
        ];

        $labels = json_encode(array_keys($grafico));
        $values = json_encode(array_values($grafico));

        return view('admin.dashboards.dash-ete', compact('labels', 'values'));
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
