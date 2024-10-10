<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'name' => 'Event 1',
                'start_date' => '2024-01-01',
                'end_date' => '2024-01-02',
                'description' => 'Description for Event 1',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 1
            ],
            [
                'name' => 'Event 2',
                'start_date' => '2024-02-01',
                'end_date' => '2024-02-02',
                'description' => 'Description for Event 2',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 2
            ],
        ]);
    }
}
