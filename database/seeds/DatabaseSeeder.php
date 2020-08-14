<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            CategorySeeder::class,
            UserSeeder::class
        ]);
    }
}
