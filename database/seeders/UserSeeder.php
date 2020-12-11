<?php

namespace Database\Seeders;

use App\Models\Tenant;
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
        $tenant = Tenant::first();

        $tenant->users()->create([
            'name'           => 'Marcos José Chaprão',
            'email'          => 'mchaprao@gmail.com',
            'password'       => bcrypt('11090326'),
        ]);
    }
}
