<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Hotels')->insert([
            'shop_id' => 1,
            'accepted_overnight' => false,
            'price_rate' => 100
        ]);
        DB::table('Hotels')->insert([
            'shop_id' => 3,
            'accepted_overnight' => true,
            'price_rate' => 200
        ]);
        DB::table('Hotels')->insert([
            'shop_id' => 4,
            'accepted_overnight' => false,
            'price_rate' => 300
        ]);
        DB::table('Hotels')->insert([
            'shop_id' => 5,
            'accepted_overnight' => true,
            'price_rate' => 200
        ]);
        DB::table('Hotels')->insert([
            'shop_id' => 6,
            'accepted_overnight' => true,
            'price_rate' => 100
        ]);
        DB::table('Hotels')->insert([
            'shop_id' => 7,
            'accepted_overnight' => true,
            'price_rate' => 1000
        ]);
        DB::table('Hotels')->insert([
            'shop_id' => 8,
            'accepted_overnight' => true,
            'price_rate' => 200
        ]);
    }
}
