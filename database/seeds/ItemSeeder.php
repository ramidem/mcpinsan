<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    public function run()
    {
        DB::table('items')->insert([
            'code' => "MCP-" . strtoupper(Str::random(5)),
            'item_status_id' => 1,
            'asset_id' => 1
        ]);

        DB::table('items')->insert([
            'code' => "MCP-" . strtoupper(Str::random(5)),
            'item_status_id' => 1,
            'asset_id' => 2
        ]);

        DB::table('items')->insert([
            'code' => "MCP-" . strtoupper(Str::random(5)),
            'item_status_id' => 1,
            'asset_id' => 3
        ]);
    }
}
