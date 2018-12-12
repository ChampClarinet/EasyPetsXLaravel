<?php

use Illuminate\Database\Seeder;

class GroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Grooms')->insert([
            'shop_id' => 1,
            'price_rate' => 200
        ]);
        DB::table('Grooms')->insert([
            'shop_id' => 2,
            'price_rate' => 300
        ]);
        DB::table('Grooms')->insert([
            'shop_id' => 3,
            'price_rate' => 300
        ]);
        DB::table('Grooms')->insert([
            'shop_id' => 4,
            'price_rate' => 300
        ]);
        DB::table('Grooms')->insert([
            'shop_id' => 5,
            'price_rate' => 200
        ]);
        DB::table('Grooms')->insert([
            'shop_id' => 6,
            'price_rate' => 200
        ]);
        DB::table('Grooms')->insert([
            'shop_id' => 7,
            'price_rate' => 500
        ]);
    }
}
