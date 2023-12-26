<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JewelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Jewel::create([
            'Name' => 'Saphire',
            'Gram' => 10,
            'Color' => 'Blue',
            'Image' => 'test',
            'CategoryId' => 2
        ]);
    }
}
