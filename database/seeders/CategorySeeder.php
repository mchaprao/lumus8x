<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'id'             => 1,
                'name'           => 'Meio Ambiente',
                'description'    => 'Meio Ambiente',
                'slug'           => 'meio-ambiente',
                'active'         => 'Y',
            ],
            [
                'id'             => 2,
                'name'           => 'Segurança do Trabalho',
                'description'    => 'Segurança do Trabalho',
                'slug'           => 'seguranca-do-trabalho',
                'active'         => 'Y',
            ],
        ];

        Category::insert($categories);
    }
}
