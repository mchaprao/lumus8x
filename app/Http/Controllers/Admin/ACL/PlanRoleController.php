<?php

namespace App\Http\Controllers\Admin\ACL;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Role;
use Illuminate\Http\Request;

class PlanRoleController extends Controller
{
    protected $plan, $role;

    public function __construct(Plan $plan, Role $role)
    {
        $this->plan = $plan;
        $this->role = $role;

        // $this->middleware(['can:plans']);
    }

    public function roles($idPlan)
    {
        if (!$plan = $this->plan->find($idPlan)) {
            return redirect()->back();
        }

        $roles = $plan->roles()->paginate();

        return view('admin.plans.roles.roles', compact('plan', 'roles'));
    }


    public function plans($idRole)
    {
        if (!$role = $this->role->find($idRole)) {
            return redirect()->back();
        }

        $plans = $role->plans()->paginate();

        return view('admin.roles.plans.plans', compact('role', 'plans'));
    }


    public function rolesAvailable(Request $request, $idPlan)
    {
        if (!$plan = $this->plan->find($idPlan)) {
            return redirect()->back();
        }

        $filters = $request->except('_token');

        $roles = $plan->rolesAvailable($request->filter);

        return view('admin.plans.roles.available', compact('plan', 'roles', 'filters'));
    }


    public function attachRolesPlan(Request $request, $idPlan)
    {
        if (!$plan = $this->plan->find($idPlan)) {
            return redirect()->back();
        }

        if (!$request->roles || count($request->roles) == 0) {
            return redirect()
                        ->back()
                        ->with('info', 'Precisa escolher pelo menos um plano');
        }

        $plan->roles()->attach($request->roles);

        return redirect()->route('plans.roles', $plan->id);
    }

    public function detachRolePlan($idPlan, $idRole)
    {
        $plan = $this->plan->find($idPlan);
        $role = $this->role->find($idRole);

        if (!$plan || !$role) {
            return redirect()->back();
        }

        $plan->roles()->detach($role);

        return redirect()->route('plans.roles', $plan->id);
    }
}
