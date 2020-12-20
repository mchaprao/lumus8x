<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properfil extends Model
{
    use HasFactory;

    protected $table = 'properfis';

    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * Pegar Permissões
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    /**
     * Get Plans
     */
    public function plans()
    {
        return $this->belongsToMany(Plan::class);
    }

    /**
     * Permissões não linkado no Perfil
     */
    public function PermissionsAvailable()
    {
        $permissions = Permission::whereNotIn('permissions.id', function($query) {
            $query->select('permission_properfil.permission_id');
            $query->from('permission_properfil');
            $query->whereRaw("permission_properfil.properfil_id={$this->id}");
        })
        ->paginate();

        return $permissions;
    }
}
