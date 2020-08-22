<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            AssetSeeder::class,
            ItemStatusSeeder::class,
            ItemSeeder::class
        ]);
    }
}
