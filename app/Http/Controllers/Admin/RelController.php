<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visit;
use Illuminate\Http\Request;

class RelController extends Controller
{
    // public function visits($id)
    // {
    //     $visit = Visit::where('id', $id)->first();        
    //     return view('relatories.rel_visit', compact('visit'));
    // }

    public function visit()
    {
        $visit = Visit::all();
        return view('admin.relatories.rel_visit', compact('visit'));
    }
}
