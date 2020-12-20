<?php

namespace App\Http\Controllers\Admin\ACL;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Properfil;
use Illuminate\Http\Request;

class PermissionProperfilController extends Controller
{
    private $properfil, $permission;

    public function __construct(Properfil $properfil, Permission $permission)
    {
        $this->properfil = $properfil;
        $this->permission = $permission;

        $this->middleware(['can:Perfil']);
    }

    public function permissions($idProperfil)
    {        
        $properfil = $this->properfil->find($idProperfil);

        if (!$properfil) {
            return redirect()->back();
        }

        $permissions = $properfil->permissions()->paginate();

        return view('admin.properfis.permissions.permissions', compact('properfil', 'permissions'));
    }

    public function properfis($idPermission)
    {
        if (!$permission = $this->permission->find($idPermission)) {
            return redirect()->back();
        }

        $properfis = $permission->properfis()->paginate();

        return view('admin.permissions.properfis.properfis', compact('permission', 'properfis'));
    }


    public function permissionsAvailable($idProperfil)
    {
        if(!$properfil = $this->properfil->find($idProperfil)) {
            return redirect()->back();
        }

        $permissions = $properfil->permissionsAvailable();

        return view('admin.properfis.permissions.available', compact('properfil', 'permissions'));
    }

    public function attachPermissionProperfil(Request $request, $idProperfil)
    {
        if(!$properfil = $this->properfil->find($idProperfil)) {
            return redirect()->back();
        }

        if(!$request->permissions || count($request->permissions) == 0) {
            return redirect()
                    ->back()
                    ->with('info', 'Precisa escolher pelo menos uma permissão');
        }

        $properfil->permissions()->attach($request->permissions);

        return redirect()->route('properfis.permissions', $properfil->id);
    }

    public function detachPermissionProperfil($idProperfil, $idPermission)
    {
        $properfil = $this->properfil->find($idProperfil);
        $permission = $this->permission->find($idPermission);

        if(!$properfil || !$permission) {
            return redirect()->back();
        }

        $properfil->permissions()->detach($permission);

        return redirect()->route('properfis.permissions', $properfil->id);
    }
    
    public function ProperfilsAvailable($idPermission)
    {
        if(!$permission = $this->permission->find($idPermission)) {
            return redirect()->back();
        }

        $properfis = $permission->ProperfilsAvailable();

        return view('admin.permissions.properfis.available', compact('permission', 'properfis'));
    }

    public function attachProperfilsPermission(Request $request, $idPermission)
    {
        if(!$permission = $this->permission->find($idPermission)) {
            return redirect()->back();
        }

        if(!$request->properfis || count($request->properfis) == 0) {
            return redirect()
                            ->back()
                            ->with('info', 'Precisa escolher pelo menos um properfil');
        }

        $permission->properfis()->attach($request->properfis);

        return redirect()->route('permissions.properfis', $permission->id);
    }

    public function detachProperfilsPermission($idPermission, $idProperfil)
    {
        $permission = $this->permission->find($idPermission);
        $properfil = $this->properfil->find($idProperfil);        

        if(!$permission || !$properfil) {
            return redirect()->back();
        }

        $permission->properfis()->detach($properfil);

        return redirect()->route('permissions.properfis', $permission->id);
    }
}
