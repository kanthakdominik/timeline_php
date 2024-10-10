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
            ['id' => 1, 'name' => 'Pink Floyd', 'color' => 'Pink', 'image' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Metallica', 'color' => 'Black', 'image' => null, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Bob Marley', 'color' => 'Green', 'image' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

