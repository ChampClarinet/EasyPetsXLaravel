<?php

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Replies')->insert([
            'review_id' => 1,
            'text' => 'ยินดีให้บริการค่ะ'
        ]);
        DB::table('Replies')->insert([
            'review_id' => 3,
            'text' => 'ขอบคุณครับ ทางร้านยินดีให้บริการครับ'
        ]);
    }
}
