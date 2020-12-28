<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebEmpresa;
use Illuminate\Http\Request;

class WebEmpresaController extends Controller
{
    private $repository;

    public function __construct(WebEmpresa $webempresa)
    {
        $this->repository = $webempresa;

        // $this->middleware(['can:Categorias']);
    }

    public function index()
    {        
        $webempresas = $this->repository->orderby('id', 'desc')->paginate();

        return view('admin.web-empresa.index', compact('webempresas'));
    }
}
