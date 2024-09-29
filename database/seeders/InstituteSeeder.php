<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstituteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $institutes = [
            [
             'name' => 'System', 
            //  'code' => 'system', 
             'lga_id' =>   6,
             'state_id' =>   1,
             'created_by' =>   1,
             'modified_by' =>   1,
            ],
        ];

        // Insert institutes into the 'institutes' table
        DB::table('institutes')->insert($institutes);
    }
}
