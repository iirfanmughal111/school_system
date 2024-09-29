<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $religions = [
            [
             'name' => 'Islam', 
             'code' => 'is', 
            ],
          
        ];

        // Insert religions into the 'religions' table
        DB::table('religions')->insert($religions);
    }
}
