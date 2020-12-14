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
                'name'           => 'Administrador',
                'description'    => 'Administrador do Sistema',
            ],
            [
                'name'           => 'Cliente',
                'description'    => 'Cliente do Sistema',
            ],
            [
                'name'           => 'Técnico',
                'description'    => 'Técnico do Sistema',
            ],
        ];

        Role::insert($roles);
    }
}