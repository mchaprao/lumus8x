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
                'name'           => 'Clientes',
                'description'    => 'Lista de Clientes',
            ],
            [
                'name'           => 'Clientes - Adicionar',
                'description'    => 'Adicionar Novo Cliente',
            ],
            [
                'name'           => 'Clientes - Editar',
                'description'    => 'Editar cliente',
            ],
            [
                'name'           => 'Clientes - Detalhes',
                'description'    => 'Detalhes do Cliente',
            ],
            [
                'name'           => 'Clientes - Excluir',
                'description'    => 'Excluir Cliente',
            ],
            [
                'name'           => 'Perfil',
                'description'    => 'Lista de Perfis',
            ],
            [
                'name'           => 'Efluentes',
                'description'    => 'Módulo Efluentes',
            ],
            [
                'name'           => 'Documentos',
                'description'    => 'Módulo Documentos e Licenças',
            ],
            [
                'name'           => 'Permissão',
                'description'    => 'Lista de Permissões',
            ],
            [
                'name'           => 'Tecnicos',
                'description'    => 'Módulo Técnicos',
            ],
            [
                'name'           => 'Planos',
                'description'    => 'Lista de Planos',
            ],
            [
                'name'           => 'Usuarios',
                'description'    => 'Lista de Usuarios',
            ],
        ];

        Permission::insert($permissions);
    }
}