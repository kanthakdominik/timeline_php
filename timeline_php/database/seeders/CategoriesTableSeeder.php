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
            ['name' => 'sportowa', 'color' => '#47b39d', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'muzyczna', 'color' => '#ffc153', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'kulturalna', 'color' => '#eb6b56', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'edukacyjna', 'color' => '#b05f6d', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'rekreacyjna', 'color' => '#9969c7', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}