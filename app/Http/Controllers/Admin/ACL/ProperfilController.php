<?php

namespace App\Http\Controllers\Admin\ACL;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdatePerfil;
use App\Models\Properfil;
use Illuminate\Http\Request;

class ProperfilController extends Controller
{
    private $repository;

    public function __construct(Properfil $properfil)
    {
        $this->repository = $properfil;

        $this->middleware(['can:Perfil']);
    }

    public function index()
    {
        $properfis = $this->repository->orderby('name', 'asc')->paginate();

        return view('admin.properfis.index', compact('properfis'));
    }

    public function create()
    {
        return view('admin.properfis.create');
    }

    public function store(StoreUpdatePerfil $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('properfis.index');
    }

    public function show($id)
    {
        if (!$properfil = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.properfis.show', compact('properfil'));
    }

    public function edit($id)
    {
        if (!$properfil = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.properfis.edit', compact('properfil'));
    }

    public function update(StoreUpdatePerfil $request, $id)
    {
        if (!$properfil = $this->repository->find($id)) {
            return redirect()->back();
        }

        $properfil->update($request->all());

        return redirect()->route('properfis.index');
    }

    public function destroy($id)
    {
        if (!$properfil = $this->repository->find($id)) {
            return redirect()->back();
        }

        $properfil->delete();

        return redirect()->route('properfis.index');
    }
}
