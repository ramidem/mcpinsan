<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    public function run()
    {
        DB::table('items')->insert([
            'code' => "MCP-" . strtoupper(Str::random(5))
        ]);

        DB::table('items')->insert([
            'code' => "MCP-" . strtoupper(Str::random(5))
        ]);

        DB::table('items')->insert([
            'code' => "MCP-" . strtoupper(Str::random(5))
        ]);
    }
}
