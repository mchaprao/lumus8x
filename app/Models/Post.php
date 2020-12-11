<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'content',
        'slug',
        'image',
        'published_at',
        'active'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
