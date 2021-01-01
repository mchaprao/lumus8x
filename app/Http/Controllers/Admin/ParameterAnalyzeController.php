<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateParameter;
use App\Models\ParameterAnalyze;
use App\Models\Tenant;
use Illuminate\Http\Request;

class ParameterAnalyzeController extends Controller
{
    private $repository;

    public function __construct(ParameterAnalyze $parameter)
    {
        $this->repository = $parameter;

        $this->middleware(['can:Parameters']);
    }

    public function index()
    {                
        $parameters = $this->repository->orderby('name', 'asc')->paginate();

        return view('admin.parameters.index', compact('parameters'));
    }

    public function create()
    {
        return view('admin.parameters.create');
    }

    public function store(StoreUpdateParameter $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('parameters.index');
    }

    public function show($id)
    {
        if (!$parameter = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.parameters.show', compact('parameter'));
    }

    public function edit($id)
    {
        if (!$parameter = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.parameters.edit', compact('parameter'));
    }
    
    public function update(StoreUpdateParameter $request, $id)
    {
        if (!$parameter = $this->repository->find($id)) {
            return redirect()->back();
        }

        $parameter->update($request->all());

        return redirect()->route('parameters.index');
    }

    public function destroy($id)
    {
        if (!$parameter = $this->repository->find($id)) {
            return redirect()->back();
        }

        $parameter->delete();

        return redirect()->route('parameters.index');
    }
}
