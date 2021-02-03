<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Equipment;
use Illuminate\Http\Request;
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
            $equipments = $this->repository->orderby('id', 'desc')->paginate();
        }else {
            $equipments = $this->repository->orderby('id', 'desc')->where('tenant_id', '=', $empresa)->paginate();
        }

        return view('admin.equipments.index', compact('equipments'));
    }
}
