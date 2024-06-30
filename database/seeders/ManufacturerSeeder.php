<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('manufacturer')->insert([
            ['name' => 'Honda'],
            ['name' => 'Toyota'],
            ['name' => 'Mazda'],
        ]);
    }
}
