<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TongueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tongue = [
            [
             'name' => 'English', 
             'code' => 'en', 
            ],
            [
                'name' => 'Urdu', 
                'code' => 'ur', 
            ],
            [
            'name' => 'Pashto', 
                'code' => 'ps', 
            ],
        ];

        // Insert institutes into the 'institutes' table
        DB::table('tongue')->insert($tongue);
    }
}
