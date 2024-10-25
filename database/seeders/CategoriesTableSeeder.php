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
            ['name' => 'sportowa', 'color' => '#FF6F61', 'created_at' => now(), 'updated_at' => now()], // Coral
            ['name' => 'muzyczna', 'color' => '#6B5B95', 'created_at' => now(), 'updated_at' => now()], // Purple
            ['name' => 'kulturalna', 'color' => '#88B04B', 'created_at' => now(), 'updated_at' => now()], // Green
            ['name' => 'edukacyjna', 'color' => '#F7CAC9', 'created_at' => now(), 'updated_at' => now()], // Pink
            ['name' => 'rekreacyjna', 'color' => '#92A8D1', 'created_at' => now(), 'updated_at' => now()]  // Blue
        ]);
    }
}