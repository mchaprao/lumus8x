<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'url', 'price', 'description'];

    public function details()
    {
        return $this->hasMany(DetailPlan::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function tenants()
    {
        return $this->hasMany(Tenant::class);
    }

    /**
     * Perfis não linkado na Permissão
     */
    public function RolesAvailable()
    {
        $roles = Role::whereNotIn('roles.id', function($query) {
            $query->select('plan_role.role_id');
            $query->from('plan_role');
            $query->whereRaw("plan_role.plan_id={$this->id}");
        })
        ->paginate();

        return $roles;
    }
}
