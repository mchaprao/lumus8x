<?php

namespace Database\Seeders;

use App\Models\Properfil;
use Illuminate\Database\Seeder;

class ProperfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $properfis = [
            [
                'name'           => 'Efluentes',
                'description'    => 'Módulo Efluentes',
            ],
            [
                'name'           => 'Documentos',
                'description'    => 'Módulo Documentos',
            ],
            [
                'name'           => 'Financeiro',
                'description'    => 'Setor Financeiro',
            ],
            [
                'name'           => 'Vendas',
                'description'    => 'Setor de Vendas',
            ],
        ];

        Properfil::insert($properfis);
    }
}