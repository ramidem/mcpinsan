<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    public function run()
    {
        DB::table('items')->insert([
            'code' => "MCP-" . strtoupper(Str::random(5)),
            'item_status_id' => 1,
            'asset_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('items')->insert([
            'code' => "MCP-" . strtoupper(Str::random(5)),
            'item_status_id' => 1,
            'asset_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('items')->insert([
            'code' => "MCP-" . strtoupper(Str::random(5)),
            'item_status_id' => 1,
            'asset_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
