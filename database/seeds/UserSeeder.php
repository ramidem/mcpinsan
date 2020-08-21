<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mcpinsan.com',
            'password' => Hash::make('11111111'),
            'role_id' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Naruto Uzumaki',
            'email' => 'ninetails@mcpinsan.com',
            'password' => Hash::make('11111111'),
            'role_id' => 2
        ]);
    }
}
