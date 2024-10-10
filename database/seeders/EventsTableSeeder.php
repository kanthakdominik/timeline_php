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
                'name' => 'Pink Floyd - The Man and The Journey',
                'start_date' => '1969-04-14',
                'end_date' => '1969-10-17',
                'description' => 'This tour featured performances of two conceptual pieces, "The Man" and "The Journey," which included early versions of songs that would later appear on their albums.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 'Pink Floyd'
            ],
            [
                'name' => 'Pink Floyd - Atom Heart Mother',
                'start_date' => '1970-01-17',
                'end_date' => '1971-11-20',
                'description' => 'Supporting the album Atom Heart Mother, this tour included elaborate live performances with orchestral and choir arrangements.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 'Pink Floyd'
            ],
            [
                'name' => 'Pink Floyd - Dark Side of the Moon',
                'start_date' => '1972-01-20',
                'end_date' => '1973-12-09',
                'description' => 'This tour supported the iconic album The Dark Side of the Moon, featuring the complete album played live with advanced lighting and sound effects.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 'Pink Floyd'
            ],
            [
                'name' => 'Pink Floyd - Wish You Were Here',
                'start_date' => '1975-04-08',
                'end_date' => '1975-07-05',
                'description' => 'This tour promoted the album Wish You Were Here and included performances of the entire album along with other classic tracks.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 'Pink Floyd'
            ],
            [
                'name' => 'Pink Floyd - In the Flesh',
                'start_date' => '1977-01-23',
                'end_date' => '1977-07-06',
                'description' => 'Supporting the album Animals, this tour was known for its elaborate stage setups and the use of large inflatable animals.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 'Pink Floyd'
            ],
            [
                'name' => 'Pink Floyd - The Wall',
                'start_date' => '1980-02-07',
                'end_date' => '1981-06-17',
                'description' => 'This tour featured the live performance of the entire The Wall album, with elaborate stage designs including the construction of a wall on stage.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 'Pink Floyd'
            ],
            [
                'name' => 'Pink Floyd - The Division Bell',
                'start_date' => '1994-03-30',
                'end_date' => '1994-10-29',
                'description' => 'Supporting the album The Division Bell, this tour was known for its impressive light shows and stage effects.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 'Pink Floyd'
            ],
            [
                'name' => 'Metallica - Damage, Inc.',
                'start_date' => '1986-03-27',
                'end_date' => '1987-02-13',
                'description' => 'This tour supported the album Master of Puppets and was notable for its intense performances and the tragic death of bassist Cliff Burton.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 'Metallica'
            ],
            [
                'name' => 'Metallica - Damaged Justice',
                'start_date' => '1988-09-11',
                'end_date' => '1989-10-08',
                'description' => 'Supporting the album ...And Justice for All, this tour featured elaborate stage setups and was one of their longest tours.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 'Metallica'
            ],
            [
                'name' => 'Metallica - Wherever We May Roam',
                'start_date' => '1991-08-01',
                'end_date' => '1992-12-18',
                'description' => 'This tour supported the self-titled album Metallica (The Black Album) and included extensive worldwide performances.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 'Metallica'
            ],
            [
                'name' => 'Metallica - Madly in Anger with the World',
                'start_date' => '2003-11-06',
                'end_date' => '2004-11-28',
                'description' => 'Supporting the album St. Anger, this tour featured aggressive performances and a raw, stripped-down stage setup.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 'Metallica'
            ],
            [
                'name' => 'Metallica - World Magnetic',
                'start_date' => '2008-10-21',
                'end_date' => '2010-11-21',
                'description' => 'This tour supported the album Death Magnetic and included extensive performances across the globe.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 'Metallica'
            ],
            [
                'name' => 'Metallica - WorldWired',
                'start_date' => '2016-02-06',
                'end_date' => '2019-08-25',
                'description' => 'Supporting the album Hardwired... to Self-Destruct, this tour featured innovative stage designs and extensive use of video screens.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 'Metallica'
            ],
            [
                'name' => 'Metallica - M72 World Tour',
                'start_date' => '2023-04-27',
                'end_date' => '2024-11-12',
                'description' => 'This tour supports the album 72 Seasons and features a unique "No Repeat Weekend" format with different setlists each night.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 'Metallica'
            ],
            [
                'name' => 'Bob Marley - Catch a Fire',
                'start_date' => '1973-04-27',
                'end_date' => '1973-07-21',
                'description' => 'This tour supported the album Catch a Fire and marked Bob Marley's first major international tour.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 'Bob Marley'
            ],
            [
                'name' => 'Bob Marley - Burnin\'',
                'start_date' => '1973-10-25',
                'end_date' => '1973-11-30',
                'description' => 'Supporting the album Burnin\', this tour included performances in the UK and the US.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 'Bob Marley'
            ],
            [
                'name' => 'Bob Marley - Natty Dread',
                'start_date' => '1975-06-06',
                'end_date' => '1975-07-20',
                'description' => 'This tour supported the album Natty Dread and included Marley`s first performance at the Lyceum Theatre in London.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 'Bob Marley'
            ],
            [
                'name' => 'Bob Marley - Rastaman Vibration',
                'start_date' => '1976-04-23',
                'end_date' => '1976-07-18',
                'description' => 'Supporting the album Rastaman Vibration, this tour included performances in Europe and the US.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 'Bob Marley'
            ],
            [
                'name' => 'Bob Marley - Exodus',
                'start_date' => '1977-05-10',
                'end_date' => '1978-06-08',
                'description' => 'This tour supported the album Exodus and included iconic performances in Europe and the US.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 'Bob Marley'
            ],
            [
                'name' => 'Bob Marley - Kaya',
                'start_date' => '1978-05-18',
                'end_date' => '1978-08-05',
                'description' => 'Supporting the album Kaya, this tour included performances in Europe and the US.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 'Bob Marley'
            ],
            [
                'name' => 'Bob Marley - Uprising',
                'start_date' => '1980-05-30',
                'end_date' => '1980-09-23',
                'description' => 'This tour supported the album Uprising and was Marley`s final tour before his passing in 1981.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 'Bob Marley'
            ]
        ]);
    }
}
