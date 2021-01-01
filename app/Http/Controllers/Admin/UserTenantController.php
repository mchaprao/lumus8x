<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateUser;
use App\Models\Role;
use App\Models\User;
use App\Models\Tenant;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserTenantController extends Controller
{
    private $repository;

    public function __construct(User $user)
    {
        $this->repository = $user;

        $this->middleware(['can:Usuarios']);
    }
    
    public function index()
    {   
        $empresa = Auth::user()->tenant_id;
        // dd($empresa);
        // $users = $this->repository->orderby('id', 'desc')->paginate();
        $users = $this->repository->orderby('name', 'asc')->where('tenant_id', '=', $empresa)->paginate();
        $tenants = Tenant::all();
                
        return view('admin.users.tenant.index', compact('users', 'tenants'));
    }

    public function create()
    {
        $tenants = Tenant::all();

        return view('admin.users.tenant.create', compact('tenants'));
    }

    public function store(StoreUpdateUser $request)
    {
        $data = $request->only([
            'name',
            'email',
            'password',
            'tenant_id'
        ]);

        $user = new User;
        
        $user->tenant_id = Auth::user()->tenant_id;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        
        $user->save();

        return redirect()->route('users-tenant.index');
    }

    public function show($id)
    {
        $tenants = Tenant::all();

        if (!$user = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.users.tenant.show', compact('user', 'tenants'));
    }

    public function edit($id)
    {

        if (!$user = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.users.tenant.edit', compact('user'));
    }
    
    public function update(StoreUpdateUser $request, $id)
    {        
        $user = User::find($id);

        if($user) {
            $data = $request->only([
                'name',
                'email',
                'password',
                // 'tenant_id'
            ]);
            // 1. Alteração do tenant
            // $user->tenant_id = $data['tenant_id'];

            // 1. Alteração do nome
            $user->name = $data['name'];

            // 2. Alteração do e-mail
            // 2.1 Primeiro, verficamos se o email foi alterado
            if($user->email != $data['email']) {
                // 2.2 Verificamos se o novo email já existe
                $hasEmail = User::where('email', $data['email'])->get();
                // 2.3 Se não existir, nós alteramos.
                if(count($hasEmail) === 0) {
                    $user->email = $data['email'];
                } 
            }

            // 3. Alteração da senha
            // 3.1 Verifica se o usuário digitou senha
            if(!empty($data['password'])) {
                // Valida a senha
                if(strlen($data['password']) >= 4) {
                    // 3.3 Altera a senha
                    $user->password = Hash::make($data['password']);                   
                }
            }
            
            $user->save();

        }

        return redirect()->route('users-tenant.index');
    }

    public function destroy($id)
    {
        if (!$user = $this->repository->find($id)) {
            return redirect()->back();
        }

        $user->delete();

        return redirect()->route('users-tenant.index');
    }
}
