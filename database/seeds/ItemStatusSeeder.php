<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemStatusSeeder extends Seeder
{
    public function run()
    {
        DB::table('item_statuses')->insert([
            'name' => 'available'
        ]);
        DB::table('item_statuses')->insert([
            'name' => 'damaged'
        ]);
        DB::table('item_statuses')->insert([
            'name' => 'lent'
        ]);
        DB::table('item_statuses')->insert([
            'name' => 'lost'
        ]);
    }
}
