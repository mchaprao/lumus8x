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

    public function properfis()
    {
        return $this->belongsToMany(Properfil::class);
    }

    public function tenants()
    {
        return $this->hasMany(Tenant::class);
    }

    /**
     * Perfis não linkado na Permissão
     */
    public function properfisAvailable()
    {
        $properfis = Properfil::whereNotIn('properfis.id', function($query) {
            $query->select('plan_properfil.properfil_id');
            $query->from('plan_properfil');
            $query->whereRaw("plan_properfil.plan_id={$this->id}");
        })
        ->paginate();

        return $properfis;
    }
}
