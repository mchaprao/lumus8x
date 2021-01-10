<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateVisit;
use App\Models\Tenant;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VisitController extends Controller
{

    private $repository;

    public function __construct(Visit $visit)
    {
        $this->repository = $visit;

        $this->middleware(['can:Efluentes']);
    }
    
    public function index()
    {
        $empresa = Auth::user()->tenant_id;
        
        if(Auth::user()->tenant_id == 1){
            $visits = $this->repository->latest()->paginate();
        }else {
            $visits = $this->repository->orderby('visit_at', 'desc')->where('tenant_id', '=', $empresa)->paginate();
        }

        $tenants = Tenant::all();        
        $users = User::all();
        return view('admin.visits.index', compact('visits', 'users', 'tenants'));
    }

    public function create()
    {
        $tenants = Tenant::all();
        $users = User::all();
        return view('admin.visits.create', compact('users', 'tenants'));
    }

    public function store(StoreUpdateVisit $request)
    {
        $data = $request->only([
            'visit_at',
            'tenant_id',            
            'user_id',
            'arquivo',
            'status'           
        ]);

        //SCRIPT PARA SUBIR ARQUIVO NA PASTA
        $nome_img = preg_replace('/[ -]+/', '-', @$_FILES['imagem']['name']);        
        $caminho = 'backend/assets/images/visits/'. $nome_img;
        if (@$_FILES['imagem']['name'] == "") {
            $imagem = "";
        } else {

            $imagem = $nome_img;
        }

        $imagem_temp = @$_FILES['imagem']['tmp_name'];

        $ext = pathinfo($imagem, PATHINFO_EXTENSION);

        $visit = new Visit;
        $visit->visit_at = $data['visit_at'];
        $visit->tenant_id = $data['tenant_id'];
        $visit->user_id = $data['user_id'];        
        $visit->arquivo = $imagem;
        
        if($imagem !== '') {
            $visit->status = 'C';
        };
        
        $visit->save();

        if ($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif' or $ext == 'pdf' or $ext == '') {
            move_uploaded_file($imagem_temp, $caminho);
        } else {
            echo 'Extensão de Arquivo não permitida!';
            exit();
        }

        return redirect()->route('visits.index');
    }

    public function show($id)
    {
        //
    }
    
    public function destroy($id)
    {
        if (!$visit = $this->repository->find($id)) {
            return redirect()->back();
        }

        $visit->delete();

        return redirect()->route('visits.index');
        
    }
}
