<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class AssetSeeder extends Seeder
{
    public function run()
    {
        DB::table('assets')->insert([
            'image' => 'https://via.placeholder.com/500',
            'name' => 'Chuwi LapBook Pro',
            'description' => 'Just specify the image size after our URL (https://via.placeholder.com/) and you’ll get a placeholder image. So the image URL should look this',
            'category_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('assets')->insert([
            'image' => 'https://via.placeholder.com/500',
            'name' => 'Generic HMDI Cables',
            'description' => 'Just specify the image size after our URL (https://via.placeholder.com/) and you’ll get a placeholder image. So the image URL should look this',
            'category_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('assets')->insert([
            'image' => 'https://via.placeholder.com/500',
            'name' => 'Samsun 27"',
            'description' => 'Just specify the image size after our URL (https://via.placeholder.com/) and you’ll get a placeholder image. So the image URL should look this',
            'category_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
