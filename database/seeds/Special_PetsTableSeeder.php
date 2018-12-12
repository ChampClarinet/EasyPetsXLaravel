<?php

use Illuminate\Database\Seeder;

class SpecialPetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Special_Pets')->insert([
            'name' => 'Reptiles',
        ]);
        DB::table('Special_Pets')->insert([
            'name' => 'Birds',
        ]);
        DB::table('Special_Pets')->insert([
            'name' => 'Marines',
        ]);
    }
}
