<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\Tenant;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plan = Plan::first();

        $plan->tenants()->create([
            'cnpj'  => '32194832000182',
            'name'  => 'Lumus Soluções Ambientais ',
            'url'   => 'lumus-solucoes-ambientais',
            'email' => 'lumus@lumusambiental.com.br',
        ]);
    }
}
