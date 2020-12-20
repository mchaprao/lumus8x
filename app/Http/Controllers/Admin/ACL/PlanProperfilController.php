<?php

namespace App\Http\Controllers\Admin\ACL;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Properfil;
use Illuminate\Http\Request;

class PlanProperfilController extends Controller
{
    protected $plan, $properfil;

    public function __construct(Plan $plan, Properfil $properfil)
    {
        $this->plan = $plan;
        $this->properfil = $properfil;

        $this->middleware(['can:Perfil']);
    }

    public function properfis($idPlan)
    {
        if (!$plan = $this->plan->find($idPlan)) {
            return redirect()->back();
        }

        $properfis = $plan->properfis()->paginate();

        return view('admin.plans.properfis.properfis', compact('plan', 'properfis'));
    }


    public function plans($idPerfil)
    {
        if (!$properfil = $this->properfil->find($idPerfil)) {
            return redirect()->back();
        }

        $plans = $properfil->plans()->paginate();

        return view('admin.properfis.plans.plans', compact('properfil', 'plans'));
    }


    public function properfisAvailable(Request $request, $idPlan)
    {
        if (!$plan = $this->plan->find($idPlan)) {
            return redirect()->back();
        }

        $filters = $request->except('_token');

        $properfis = $plan->properfisAvailable($request->filter);

        return view('admin.plans.properfis.available', compact('plan', 'properfis', 'filters'));
    }


    public function attachPerfisPlan(Request $request, $idPlan)
    {
        if (!$plan = $this->plan->find($idPlan)) {
            return redirect()->back();
        }

        if (!$request->properfis || count($request->properfis) == 0) {
            return redirect()
                        ->back()
                        ->with('info', 'Precisa escolher pelo menos um plano');
        }

        $plan->properfis()->attach($request->properfis);

        return redirect()->route('plans.properfis', $plan->id);
    }

    public function detachPerfilPlan($idPlan, $idPerfil)
    {
        $plan = $this->plan->find($idPlan);
        $properfil = $this->properfil->find($idPerfil);

        if (!$plan || !$properfil) {
            return redirect()->back();
        }

        $plan->properfis()->detach($properfil);

        return redirect()->route('plans.properfis', $plan->id);
    }
}
