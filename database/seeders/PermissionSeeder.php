<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'name'           => 'Cliente - Lista',
                'description'    => 'Lista de Clientes',
            ],
            [
                'name'           => 'Cliente - Cadastro',
                'description'    => 'Cadastrar Cliente',
            ],
            [
                'name'           => 'Cliente - Editar',
                'description'    => 'Editar Cliente',
            ],
            [
                'name'           => 'Cliente - Detalhes',
                'description'    => 'Detalhes do Cliente',
            ],
            [
                'name'           => 'Cliente - Excluir',
                'description'    => 'Excluir Cliente',
            ],
        ];

        Permission::insert($permissions);
    }
}