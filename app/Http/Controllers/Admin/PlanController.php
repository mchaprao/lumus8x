<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdatePlan;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    private $repository;

    public function __construct(Plan $plan)
    {
        $this->repository = $plan;

        $this->middleware(['can:Planos']);
    }

    public function index()
    {        
        $plans = $this->repository->orderby('id', 'asc')->paginate();

        return view('admin.plans.index', compact('plans'));
    }

    public function create()
    {
        return view('admin.plans.create');
    }

    public function store(StoreUpdatePlan $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('plans.index');
    }

    public function show($id)
    {
        if (!$plan = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.plans.show', compact('plan'));
    }

    public function edit($id)
    {
        if (!$plan = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.plans.edit', compact('plan'));
    }
    
    public function update(StoreUpdatePlan $request, $id)
    {
        if (!$plan = $this->repository->find($id)) {
            return redirect()->back();
        }

        $plan->update($request->all());

        return redirect()->route('plans.index');
    }

    public function destroy($id)
    {
        if (!$plan = $this->repository->find($id)) {
            return redirect()->back();
        }

        $plan->delete();

        return redirect()->route('plans.index');
    }
}
