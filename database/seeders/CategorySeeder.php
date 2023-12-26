<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Category::factory()->create([
            'Name' => 'White jewel'
        ]);

        \App\Models\Category::factory()->create([
            'Name' => '24k'
        ]);
    }
}
