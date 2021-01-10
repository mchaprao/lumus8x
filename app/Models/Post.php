<?php

namespace App\Models;

use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use TenantTrait;

    protected $fillable = [
        'title',
        'tenant_id',
        'author_id',
        'category_id',
        'content',
        'slug',
        'image',
        'published_at',
        'active'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
