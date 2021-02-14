<?php

namespace App\Models;

use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
//    use TenantTrait;

    protected $table = 'equipments';
    protected $fillable = ['serial', 'name', 'description', 'tenant_id', 'status'];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
