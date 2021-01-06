<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'visit_at',
        'user_id',
        'status',
        'arquivo',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);

    }
}
