<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequestStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('request_statuses')->insert([
            'name' => 'processing'
        ]);

        DB::table('request_statuses')->insert([
            'name' => 'approved'
        ]);

        DB::table('request_statuses')->insert([
            'name' => 'rejected'
        ]);

        DB::table('request_statuses')->insert([
            'name' => 'cancelled'
        ]);
    }
}
