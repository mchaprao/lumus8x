<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateAnalyze;
use App\Models\Analyze;
use App\Models\AnalyzeItem;
use App\Models\Laboratory;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AnalyzeController extends Controller
{
    private $repository;

    public function __construct(Analyze $analyze)
    {
        $this->repository = $analyze;

        $this->middleware(['can:Efluentes - Analises']);
    }

    public function index()
    {
        $empresa = Auth::user()->tenant_id;
        if(Auth::user()->tenant_id == 1){
            $analyzes = $this->repository->orderby('date_analyzes', 'desc')->paginate();
        }else {
            $analyzes = $this->repository->orderby('date_analyzes', 'desc')->where('tenant_id', '=', $empresa)->paginate();
        }
        $tenants = Tenant::all();
        $laboratories = Laboratory::all();

        return view('admin.analyzes.index', compact('analyzes', 'tenants', 'laboratories'));
    }

    public function create()
    {
        $empresa = Auth::user()->tenant_id;
        if(Auth::user()->tenant_id == 1){
            $tenants = Tenant::all();
        }else {
            $tenants = Tenant::where('id', '=', $empresa)->get();
        }

        $laboratories = Laboratory::all();

        return view('admin.analyzes.create', compact('tenants', 'laboratories'));
    }

    public function store(Request $request)
    {
        $tenant = auth()->user()->tenant;

        if ($request->hasFile('pdf') && $request->arquivo->isValid()) {
            $data['arquivo'] = $request->arquivo->store("tenants/{$tenant->uuid}/analyzes");
        }

        $dados = new Analyze();
        $dados->tenant_id = $request->tenant_id;
        $dados->laboratory_id = $request->laboratory_id;
        $dados->date_analyzes = $request->date_analyzes;
        $dados->arquivo = $request->arquivo;
        $dados->save();

        return redirect()->route('analyzes.index');
    }

    public function show($id)
    {
        $empresa = Auth::user()->tenant_id;
        $tenants = Tenant::all();
        $laboratories = Laboratory::all();
        $itens = AnalyzeItem::where('tenant_id', '=', $empresa)->get();

        if (!$analyze = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.analyzes.show', compact('analyze', 'tenants', 'laboratories', 'itens'));
    }

    public function edit($id)
    {
        $empresa = Auth::user()->tenant_id;
        if(Auth::user()->tenant_id == 1){
            $tenants = Tenant::all();
        }else {
            $tenants = Tenant::where('id', '=', $empresa)->get();
        }

        $laboratories = Laboratory::all();
        $itens = AnalyzeItem::where('tenant_id', '=', $empresa)->get();

        if (!$analyze = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.analyzes.edit', compact('analyze', 'tenants', 'laboratories', 'itens'));
    }

    public function update(StoreUpdateAnalyze $request, $id)
    {
        if (!$analyze = $this->repository->find($id)) {
            return redirect()->back();
        }

        $data = $request->all();

        $tenant = auth()->user()->tenant;

        if ($request->hasFile('image') && $request->image->isValid()) {

            if (Storage::exists($analyze->image)) {
                Storage::delete($analyze->image);
            }

            $data['image'] = $request->image->store("tenants/{$tenant->uuid}/analyzes");
        }

        $analyze->update($data);

        return redirect()->route('analyzes.index');
    }

    public function destroy($id)
    {
        if (!$analyze = $this->repository->find($id)) {
            return redirect()->back();
        }

        if (Storage::exists($analyze->image)) {
            Storage::delete($analyze->image);
        }

        $analyze->delete();

        return redirect()->route('analyzes.index');
    }
}
