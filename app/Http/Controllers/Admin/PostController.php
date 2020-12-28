<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    private $repository;

    public function __construct(Post $post)
    {
        $this->repository = $post;

        $this->middleware(['can:Posts']);
    }

    public function index()
    {        
        $posts = $this->repository->orderby('id', 'desc')->paginate();

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(StoreUpdatePost $request)
    {
        $data = $request->all();

        $tenant = auth()->user()->tenant;

        if ($request->hasFile('image') && $request->image->isValid()) {
            $data['image'] = $request->image->store("tenants/{$tenant->uuid}/posts");
        }
        
        $this->repository->create($data);

        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        if (!$post = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.posts.show', compact('post'));
    }

    public function edit($id)
    {
        if (!$post = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.posts.edit', compact('post'));
    }

    public function update(StoreUpdatePost $request, $id)
    {
        if (!$post = $this->repository->find($id)) {
            return redirect()->back();
        }

        $data = $request->all();

        $tenant = auth()->user()->tenant;

        if ($request->hasFile('image') && $request->image->isValid()) {

            if (Storage::exists($post->image)) {
                Storage::delete($post->image);
            }

            $data['image'] = $request->image->store("tenants/{$tenant->uuid}/posts");
        }

        $post->update($data);

        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        if (!$post = $this->repository->find($id)) {
            return redirect()->back();
        }

        if (Storage::exists($post->image)) {
            Storage::delete($post->image);
        }

        $post->delete();

        return redirect()->route('posts.index');
    }
}
