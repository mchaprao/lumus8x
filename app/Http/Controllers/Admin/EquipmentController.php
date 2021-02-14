<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateEquipment;
use App\Models\Equipment;
use App\Models\Tenant;
use Illuminate\Support\Facades\Auth;

class EquipmentController extends Controller
{
    private $repository;

    public function __construct(Equipment $equipment)
    {
        $this->repository = $equipment;

//        $this->middleware(['can:Equipamentos']);
    }

    public function index()
    {
        $empresa = Auth::user()->tenant_id;

        if(Auth::user()->tenant_id == 1){
            $equipments = $this->repository->orderby('name', 'asc')->paginate();
        }else {
            $equipments = $this->repository->orderby('name', 'asc')->where('tenant_id', '=', $empresa)->paginate();
        }

        return view('admin.equipments.index', compact('equipments'));
    }

    public function create()
    {
        $empresa = Auth::user()->tenant_id;
        if(Auth::user()->tenant_id == 1){
            $tenants = Tenant::all();
        }else {
            $tenants = Tenant::where('id', '=', $empresa)->get();
        }

        return view('admin.equipments.create', compact('tenants'));
    }

    public function store(StoreUpdateEquipment $request)
    {
        $data = $request->only([
            'serial',
            'name',
            'description',
            'status'
        ]);

        $dados = new Equipment();
        $dados->tenant_id = Auth::user()->tenant_id;
        $dados->serial = $data['serial'];
        $dados->name = $data['name'];
        $dados->description = $data['description'];
        $dados->status = 'F';
        $dados->save();

        return redirect()->route('equipments.index');
    }

    public function show($id)
    {
        $tenants = Tenant::all();

        if (!$equipment = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.equipments.show', compact('equipment', 'tenants'));
    }

    public function edit($id)
    {
        $empresa = Auth::user()->tenant_id;
        if(Auth::user()->tenant_id == 1){
            $tenants = Tenant::all();
        }else {
            $tenants = Tenant::where('id', '=', $empresa)->get();
        }

        if (!$equipment = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.equipments.edit', compact('equipment','tenants'));
    }

    public function update(StoreUpdateEquipment $request, $id)
    {
        if (!$equipment = $this->repository->find($id)) {
            return redirect()->back();
        }

        $data = $request->all();

        $tenant = auth()->user()->tenant;

        $equipment->update($data);

        return redirect()->route('equipments.index');
    }

    public function destroy($id)
    {
        if (!$equipment = $this->repository->find($id)) {
            return redirect()->back();
        }

        $equipment->delete();

        return redirect()->route('equipments.index');
    }
}
