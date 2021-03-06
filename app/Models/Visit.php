<?php

namespace App\Models;

use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;
    // use TenantTrait;

    protected $fillable = [
        'tenant_id',
        'visit_at',
        'user_id',
        'status',
        'arquivo'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);

    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);

    }
}
