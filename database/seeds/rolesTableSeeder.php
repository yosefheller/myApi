<?php

use Illuminate\Database\Seeder;

class rolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => ' Israel Book Shop',
            'description' => ' warehouse manager',
            'startdate' => '20017-05-01 00:00:00-5:00',
            'endDate' => '2018-02-5 00:00:00-5:00',
            'contactEmail' =>'@gmail.com',
            
        ]);
    }
}
