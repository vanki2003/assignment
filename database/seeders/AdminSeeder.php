<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Japan Auto Admin',
            'email' => 'admin@japanauto.mt',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);
    }
}
