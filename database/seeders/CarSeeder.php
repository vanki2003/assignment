<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    public function run()
    {
        DB::table('cars')->insert([
            [
                'model' => 'S2000',
                'year' => '2005',
                'salesperson_email' => 'mary@japanauto.com',
                'manufacturer_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'model' => 'Supra Mk4',
                'year' => '1998',
                'salesperson_email' => 'phil@japanauto.com',
                'manufacturer_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'model' => 'RX-7',
                'year' => '2000',
                'salesperson_email' => 'man@japanauto.com',
                'manufacturer_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}