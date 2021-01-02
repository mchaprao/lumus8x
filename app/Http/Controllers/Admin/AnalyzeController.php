<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateAnalyze;
use App\Models\Analyze;
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
            $analyzes = $this->repository->latest()->paginate();
        }else {
            $analyzes = $this->repository->orderby('date_analyzes', 'desc')->where('tenant_id', '=', $empresa)->paginate();
        }

        $tenants = Tenant::all();
        $laboratories = Laboratory::all();

        return view('admin.analyzes.index', compact('analyzes', 'tenants', 'laboratories'));
    }

    public function create()
    {
        $tenants = Tenant::all();
        $laboratories = Laboratory::all();

        return view('admin.analyzes.create', compact('tenants', 'laboratories'));
    }

    public function store(StoreUpdateAnalyze $request)
    {
        // $data = $request->all();

        // $tenant = auth()->user()->tenant;

        // if ($request->hasFile('pdf') && $request->arquivo->isValid()) {
        //     $data['arquivo'] = $request->arquivo->store("tenants/{$tenant->uuid}/analyzes");
        // }
        
        // $this->repository->create($data);

        // return redirect()->route('analyzes.index');

        $data = $request->only([
            'date_analyzes',
            'arquivo',
            'laboratory_id',
            'tenant_id'
        ]);

        $tenant = auth()->user()->tenant;

        if ($request->hasFile('pdf') && $request->arquivo->isValid()) {
            $data['arquivo'] = $request->arquivo->store("tenants/{$tenant->uuid}/analyzes");
        }

        $analyze = new Analyze;

        $analyze->tenant_id = $data['tenant_id'];
        $analyze->laboratory_id = $data['laboratory_id'];
        $analyze->date_analyzes = $data['date_analyzes'];
        $analyze->arquivo = $data['arquivo'];
        
        $analyze->save();

        return redirect()->route('analyzes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tenants = Tenant::all();
        $laboratories = Laboratory::all();

        if (!$analyze = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.analyzes.show', compact('analyze', 'tenants', 'laboratories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tenants = Tenant::all();
        $laboratories = Laboratory::all();

        if (!$analyze = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.analyzes.edit', compact('analyze', 'tenants', 'laboratories'));
    }


    /**
     * Update register by id
     *
     * @param  \App\Http\Requests\StoreUpdateProduct  $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
