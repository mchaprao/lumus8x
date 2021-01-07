<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateReportType;
use App\Models\ReportType;
use Illuminate\Http\Request;

class ReportTypeController extends Controller
{
    private $repository;

    public function __construct(ReportType $r_type)
    {
        $this->repository = $r_type;

        $this->middleware(['can:Tipos Relatório']);
    }

    public function index()
    {        
        $r_types = $this->repository->orderby('id', 'desc')->paginate();

        return view('admin.reportTypes.index', compact('r_types'));
    }

    public function create()
    {
        return view('admin.reportTypes.create');
    }

    public function store(StoreUpdateReportType $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('r_types.index');
    }

    public function show($id)
    {
        if (!$r_type = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.reportTypes.show', compact('r_type'));
    }

    public function edit($id)
    {
        if (!$r_type = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.reportTypes.edit', compact('r_type'));
    }
    
    public function update(StoreUpdateReportType $request, $id)
    {
        if (!$r_type = $this->repository->find($id)) {
            return redirect()->back();
        }

        $r_type->update($request->all());

        return redirect()->route('r_types.index');
    }

    public function destroy($id)
    {
        if (!$r_type = $this->repository->find($id)) {
            return redirect()->back();
        }

        $r_type->delete();

        return redirect()->route('r_types.index');
    }
}
