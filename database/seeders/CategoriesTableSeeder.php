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
            ['name' => 'Category 1', 'color' => 'Red', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Category 2', 'color' => 'Blue', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

