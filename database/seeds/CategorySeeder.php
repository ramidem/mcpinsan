<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Laptops'
        ]);

        DB::table('categories')->insert([
            'name' => 'Cables'
        ]);

        DB::table('categories')->insert([
            'name' => 'Monitors'
        ]);
    }
}
