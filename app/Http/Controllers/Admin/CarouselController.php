<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateCarousel;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    private $repository;

    public function __construct(Carousel $carousel)
    {
        $this->repository = $carousel;

        // $this->middleware(['can:Categorias']);
    }

    public function index()
    {        
        $carousels = $this->repository->orderby('id', 'desc')->paginate();

        return view('admin.web-carousels.index', compact('carousels'));
    }

    public function create()
    {
        return view('admin.web-carousels.create');
    }

    public function store(StoreUpdateCarousel $request)
    {
        $data = $request->all();

        $tenant = auth()->user()->tenant;

        if ($request->hasFile('image') && $request->image->isValid()) {
            $data['image'] = $request->image->store("tenants/{$tenant->uuid}/carousels");
        }
        
        $this->repository->create($data);

        return redirect()->route('carousels.index');
    }

    public function show($id)
    {
        if (!$carousel = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.web-carousels.show', compact('carousel'));
    }

    public function edit($id)
    {
        if (!$carousel = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.web-carousels.edit', compact('carousel'));
    }

    public function update(StoreUpdateCarousel $request, $id)
    {
        if (!$carousel = $this->repository->find($id)) {
            return redirect()->back();
        }

        $data = $request->all();

        $tenant = auth()->user()->tenant;

        if ($request->hasFile('image') && $request->image->isValid()) {

            if (Storage::exists($carousel->image)) {
                Storage::delete($carousel->image);
            }

            $data['image'] = $request->image->store("tenants/{$tenant->uuid}/carousels");
        }

        $carousel->update($data);

        return redirect()->route('carousels.index');
    }

    public function destroy($id)
    {
        if (!$carousel = $this->repository->find($id)) {
            return redirect()->back();
        }

        if (Storage::exists($carousel->image)) {
            Storage::delete($carousel->image);
        }

        $carousel->delete();

        return redirect()->route('carousels.index');
    }
}
