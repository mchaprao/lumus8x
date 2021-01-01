<?php

namespace App\Models;

use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analyze extends Model
{
    use HasFactory;
    // use TenantTrait;

    protected $fillable = ['date_analyzes', 'slug', 'arquivo', 'tenant_id', 'laboratory_id'];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function laboratory()
    {
        return $this->belongsTo(Laboratory::class);
    }

}
