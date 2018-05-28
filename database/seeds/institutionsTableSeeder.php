<?php

use Illuminate\Database\Seeder;

class institutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institutions')->insert([
            [
              'name' => 'BMG',
              'startdate' => '2009-02-01 00:00:00-5:00',
              'endDate' => '2016-02-01 00:00:00-5:00',
              'contactEmail' =>'@gmail.com',
            ],
            [
              'name' => 'PCS',
              'startdate' => '2016-10-01 00:00:00-5:00',
              'endDate' => '2018-02-01 00:00:00-5:00',
              'contactEmail' =>'@gmail.com',
            ]
        ]);
    }
}
