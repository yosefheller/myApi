<?php

use Illuminate\Database\Seeder;

class projectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'name' => 'Personal Api',
            'description' => 'A api were one can get my info',
            'launchDate' => '2018-06-01 00:00:00-5:00',
            'link' => '',
           
        ]);
    }
}
