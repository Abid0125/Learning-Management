<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::updateOrCreate(
            ['email' => 'admin@gmail.com'], // Unique constraint check
            [
                'name' => 'Admin',
                'password' => Hash::make('password@12345'),
            ]
        );
    }
}
