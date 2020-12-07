<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Marcos José Chaprão',
                'email'          => 'mchaprao@gmail.com',
                'password'       => bcrypt('11090326'),
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Liliana de Albuquerque Tenório',
                'email'          => 'liliaten@gmail.com',
                'password'       => bcrypt('100662mjc'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
