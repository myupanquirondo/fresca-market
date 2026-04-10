<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Brand;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $name = fake()->unique()->company();

            Brand::create([
                'name' => $name,
                'slug' => Str::slug($name),
                'description' => fake()->sentence(),
            ]);
        }
    }
}
