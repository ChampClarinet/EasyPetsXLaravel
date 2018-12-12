<?php

use Illuminate\Database\Seeder;

class AvailablePetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Available_Pets')->insert([
            'shop_id' => 2,
            'pet_id' => 1
        ]);
        DB::table('Available_Pets')->insert([
            'shop_id' => 3,
            'pet_id' => 1
        ]);
        DB::table('Available_Pets')->insert([
            'shop_id' => 3,
            'pet_id' => 5
        ]);
        DB::table('Available_Pets')->insert([
            'shop_id' => 8,
            'pet_id' => 5
        ]);
    }
}
