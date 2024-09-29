<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campuses = [
            [
             'name' => 'Main', 
             'short_name' => 'main', 
             'lga_id' =>   6,
             'state_id' =>   1,
             'contact' =>   '+92 316 719 8219',
             'address' =>   'Punjab Pakistab',
             'est_date' =>   '30-Oct-1997',
            ],
        ];

        // Insert campuses into the 'campuses' table
        DB::table('campuses')->insert($campuses);
    }
}
