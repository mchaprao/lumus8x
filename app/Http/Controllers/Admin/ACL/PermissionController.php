<?php

namespace App\Http\Controllers\Admin\ACL;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdatePermission;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    private $repository;

    public function __construct(Permission $permission)
    {
        $this->repository = $permission;

        $this->middleware(['can:Permissão']);
    }

    public function index()
    {        
        $permissions = $this->repository->orderby('name', 'asc')->paginate();

        return view('admin.permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('admin.permissions.create');
    }

    public function store(StoreUpdatePermission $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('permissions.index');
    }

    public function show($id)
    {
        if (!$permission = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.permissions.show', compact('permission'));
    }

    public function edit($id)
    {
        if (!$permission = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.permissions.edit', compact('permission'));
    }
    
    public function update(StoreUpdatePermission $request, $id)
    {
        if (!$permission = $this->repository->find($id)) {
            return redirect()->back();
        }

        $permission->update($request->all());

        return redirect()->route('permissions.index');
    }

    public function destroy($id)
    {
        if (!$permission = $this->repository->find($id)) {
            return redirect()->back();
        }

        $permission->delete();

        return redirect()->route('permissions.index');
    }
}
