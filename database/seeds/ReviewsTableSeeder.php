<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Reviews')->insert([
            'shop_id' => 1,
            'uid' => 'MdPBtM5T3wgzPDolMriYZDzTamr2',
            'text' => 'ของถูกดีครับ ชอบๆ'
        ]);
        DB::table('Reviews')->insert([
            'shop_id' => 4,
            'uid' => 'MdPBtM5T3wgzPDolMriYZDzTamr2',
            'text' => 'ร้านสวยมากครับ'
        ]);
    }
}
