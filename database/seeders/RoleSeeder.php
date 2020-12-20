<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $roles = [
            [
                'name'           => 'Admin',
                'description'    => 'Administrador',
            ],
            [
                'name'           => 'Gerente',
                'description'    => 'Gerente da Empresa',
            ],
            [
                'name'           => 'Técnico',
                'description'    => 'Técnico da Empresa',
            ],
            [
                'name'           => 'Operador',
                'description'    => 'Operador da Empresa',
            ],
        ];

        Role::insert($roles);
    }
}