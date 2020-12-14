<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $plans = Plan::with('details')->orderBy('price', 'ASC')->get();

        return view('web.home', compact('plans'));
    }

    public function dashboard()
    {        
        return view('dashboard');
    }
}
