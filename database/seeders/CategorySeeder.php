<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            $name = fake()->unique()->word();

            Category::create([
                'name' => ucfirst($name),
                'slug' => Str::slug($name),
                'description' => fake()->sentence(),
            ]);
        }
    }
}
