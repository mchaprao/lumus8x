<?php

namespace App\Http\Controllers\Admin\ACL;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class PermissionRoleController extends Controller
{
    private $role, $permission;

    public function __construct(Role $role, Permission $permission)
    {
        $this->role = $role;
        $this->permission = $permission;
    }

    public function permissions($idRole)
    {
        $role = $this->role->with('permissions')->find($idRole);

        if (!$role) {
            return redirect()->back();
        }

        $permissions = $role->permissions()->paginate();

        return view('admin.roles.permissions.permissions', compact('role', 'permissions'));
    }

    public function PermissionsAvailable($idRole)
    {
        if(!$role = $this->role->find($idRole)) {
            return redirect()->back();
        }

        $permissions = $role->PermissionsAvailable();

        return view('admin.roles.permissions.available', compact('role', 'permissions'));
    }

    public function attachPermissionsRole(Request $request, $idRole)
    {
        if(!$role = $this->role->find($idRole)) {
            return redirect()->back();
        }

        if(!$request->permissions || count($request->permissions) == 0) {
            return redirect()
                            ->back()
                            ->with('info', 'Precisa escolher pelo menos uma permissão');
        }

        $role->permissions()->attach($request->permissions);

        return redirect()->route('roles.permissions', $role->id);
    }

    public function detachPermissionsRole($idRole, $idPermission)
    {
        $role = $this->role->find($idRole);
        $permission = $this->permission->find($idPermission);

        if(!$role || !$permission) {
            return redirect()->back();
        }

        $role->permissions()->detach($permission);

        return redirect()->route('roles.permissions', $role->id);
    }

    public function roles($idPermission)
    {
        if (!$permission = $this->permission->find($idPermission)) {
            return redirect()->back();
        }

        $roles = $permission->roles()->paginate();

        return view('admin.permissions.roles.roles', compact('permission', 'roles'));
    }

    public function RolesAvailable($idPermission)
    {
        if(!$permission = $this->permission->find($idPermission)) {
            return redirect()->back();
        }

        $roles = $permission->RolesAvailable();

        return view('admin.permissions.roles.available', compact('permission', 'roles'));
    }

    public function attachRolesPermission(Request $request, $idPermission)
    {
        if(!$permission = $this->permission->find($idPermission)) {
            return redirect()->back();
        }

        if(!$request->roles || count($request->roles) == 0) {
            return redirect()
                            ->back()
                            ->with('info', 'Precisa escolher pelo menos um perfil');
        }

        $permission->roles()->attach($request->roles);

        return redirect()->route('permissions.roles', $permission->id);
    }

    public function detachRolesPermission($idPermission, $idRole)
    {
        $permission = $this->permission->find($idPermission);
        $role = $this->role->find($idRole);        

        if(!$permission || !$role) {
            return redirect()->back();
        }

        $permission->roles()->detach($role);

        return redirect()->route('permissions.roles', $permission->id);
    }
}
