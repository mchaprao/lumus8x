<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'name'        => 'ETE Mensal',
                'url'         => 'ete-mensal',
                'price'       => 2800,
                'description' => 'Gerenciamento de ETE Mensal',
            ],
            [
                'name'        => 'Documentos Mensal',
                'url'         => 'documentos-mensal',
                'price'       => 100,
                'description' => 'Gerenciamento de Documentos Mensal',
            ],
        ];

        Plan::insert($plans);
    }
}
