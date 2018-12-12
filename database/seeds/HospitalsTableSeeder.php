<?php

use Illuminate\Database\Seeder;

class HospitalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Hospitals')->insert([
            'shop_id' => 2,
            'accepted_serious_opertaion' => false,
            'vaccine_rate' => 50,
            'operation_rate' => 100,
            'checkup_rate' => 50
        ]);
        DB::table('Hospitals')->insert([
            'shop_id' => 3,
            'accepted_serious_opertaion' => true,
            'vaccine_rate' => 100,
            'operation_rate' => 300,
            'checkup_rate' => 100
        ]);
        DB::table('Hospitals')->insert([
            'shop_id' => 7,
            'accepted_serious_opertaion' => true,
            'vaccine_rate' => 300,
            'operation_rate' => 1000,
            'checkup_rate' => 400
        ]);
        DB::table('Hospitals')->insert([
            'shop_id' => 8,
            'accepted_serious_opertaion' => false,
            'vaccine_rate' => 100,
            'operation_rate' => 400,
            'checkup_rate' => 250
        ]);
    }
}
