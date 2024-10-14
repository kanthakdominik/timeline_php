<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'sportowa', 'color' => '#6cb8a6', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'muzyczna', 'color' => '#e6dcbd', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'kulturalna', 'color' => '#bcbfc8', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'edukacyjna', 'color' => '#ffa07a', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'rekreacyjna', 'color' => '#a5cde9', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}