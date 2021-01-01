<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateLaboratory;
use App\Models\Laboratory;
use Illuminate\Http\Request;

class LaboratoryController extends Controller
{
    private $repository;

    public function __construct(Laboratory $laboratory)
    {
        $this->repository = $laboratory;

        // $this->middleware(['can:Laboratorios']);
    }

    public function index()
    {        
        $laboratories = $this->repository->orderby('id', 'asc')->paginate();

        return view('admin.laboratories.index', compact('laboratories'));
    }

    public function create()
    {
        return view('admin.laboratories.create');
    }

    public function store(StoreUpdateLaboratory $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('laboratories.index');
    }

    public function show($id)
    {
        if (!$laboratory = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.laboratories.show', compact('laboratory'));
    }

    public function edit($id)
    {
        if (!$laboratory = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.laboratories.edit', compact('laboratory'));
    }
    
    public function update(StoreUpdateLaboratory $request, $id)
    {
        if (!$laboratory = $this->repository->find($id)) {
            return redirect()->back();
        }

        $laboratory->update($request->all());

        return redirect()->route('laboratories.index');
    }

    public function destroy($id)
    {
        if (!$laboratory = $this->repository->find($id)) {
            return redirect()->back();
        }

        $laboratory->delete();

        return redirect()->route('laboratories.index');
    }
}
