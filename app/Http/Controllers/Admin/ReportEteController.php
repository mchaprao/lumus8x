<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateReportEte;
use App\Models\ReportEte;
use App\Models\ReportType;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportEteController extends Controller
{
   private $repository;

    public function __construct(ReportEte $r_ete)
    {
        $this->repository = $r_ete;

        $this->middleware(['can:Efluentes']);
    }
    
    public function index()
    {
        $empresa = Auth::user()->tenant_id;
        
        if(Auth::user()->tenant_id == 1){
            $r_etes = $this->repository->latest()->paginate();
        }else {
            $r_etes = $this->repository->orderby('date_at', 'desc')->where('tenant_id', '=', $empresa)->paginate();
        }

        $tenants = Tenant::all();        
        $users = User::all();
        $r_types = ReportType::all();
        return view('admin.reportEtes.index', compact('r_etes', 'users', 'tenants', 'r_types'));
    }
    
    public function create()
    {
        $tenants = Tenant::all();
        $users = User::all();
        $r_types = ReportType::all();
        return view('admin.reportEtes.create', compact('users', 'tenants', 'r_types'));
    }

    public function store(StoreUpdateReportEte $request)
    {  
        $data = $request->only([
            'date_at',
            'tenant_id',            
            'user_id',
            'report_type_id',
            'arquivo'           
        ]);        

        //SCRIPT PARA SUBIR ARQUIVO NA PASTA
        $nome_img = preg_replace('/[ -]+/', '-', @$_FILES['imagem']['name']);        
        $caminho = 'backend/assets/images/reportEte/'. $nome_img;
        if (@$_FILES['imagem']['name'] == "") {
            $imagem = "";
        } else {

            $imagem = $nome_img;
        }

        $imagem_temp = @$_FILES['imagem']['tmp_name'];

        $ext = pathinfo($imagem, PATHINFO_EXTENSION);

        $r_ete = new ReportEte;
        $r_ete->date_at = $data['date_at'];
        $r_ete->tenant_id = $data['tenant_id'];
        $r_ete->user_id = Auth::user()->id;    
        $r_ete->report_type_id = $data['report_type_id'];     
        $r_ete->arquivo = $imagem;
        
        $r_ete->save();

        if ($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif' or $ext == 'pdf' or $ext == '') {
            move_uploaded_file($imagem_temp, $caminho);
        } else {
            echo 'Extensão de Arquivo não permitida!';
            exit();
        }

        return redirect()->route('r_etes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$r_ete = $this->repository->find($id)) {
            return redirect()->back();
        }

        $tenants = Tenant::all();
        $users = User::all();
        $r_types = ReportType::all();
        return view('admin.reportEtes.edit', compact('r_ete', 'users', 'tenants', 'r_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
