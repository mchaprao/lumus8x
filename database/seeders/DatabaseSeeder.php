<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([            
            PlanSeeder::class,
            TenantSeeder::class,
            UserSeeder::class,
            RoleSeeder::class,
            // CategorySeeder::class,
            PermissionSeeder::class,            
        ]);
    }
}
