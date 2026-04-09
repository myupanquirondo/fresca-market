<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear el usuario administrador
        User::create([
            'name' => 'Administrador',
            'email' => 'administrador@example.com',
            'password' => Hash::make('123'),
            'phone' => '123456789',
            'role' => 'admin',
            'address' => 'Dirección del Administrador'
        ]);

        // Crear 40 usuarios aleatorios sin factory
        for ($i = 0; $i < 40; $i++) {
            User::create([
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'password' => Hash::make('123'),
                'phone' => fake()->phoneNumber(),
                'role' => 'customer',
                'address' => fake()->address(),
            ]);
        }
    }
}
