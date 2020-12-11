<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateRole;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    private $repository;

    public function __construct(Role $role)
    {
        $this->repository = $role;
    }

    public function index()
    {        
        $roles = $this->repository->orderby('id', 'asc')->paginate();

        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(StoreUpdateRole $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('roles.index');
    }

    public function show($id)
    {
        if (!$role = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.roles.show', compact('role'));
    }

    public function edit($id)
    {
        if (!$role = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.roles.edit', compact('role'));
    }
    
    public function update(StoreUpdateRole $request, $id)
    {
        if (!$role = $this->repository->find($id)) {
            return redirect()->back();
        }

        $role->update($request->all());

        return redirect()->route('roles.index');
    }

    public function destroy($id)
    {
        if (!$role = $this->repository->find($id)) {
            return redirect()->back();
        }

        $role->delete();

        return redirect()->route('roles.index');
    }
}
