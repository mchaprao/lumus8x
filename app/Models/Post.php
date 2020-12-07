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
        'image_cover',
        'image_thumbmail',
        'published_at'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
