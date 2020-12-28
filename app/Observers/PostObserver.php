<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Str;

class PostObserver
{
    public function creating(Post $post)
    {
        $post->slug = Str::kebab($post->title);
        $post->uuid = Str::uuid();
        $post->author_id = auth()->user()->id;
    }

    public function updating(Post $post)
    {
        $post->slug = Str::kebab($post->title);
    }
}
