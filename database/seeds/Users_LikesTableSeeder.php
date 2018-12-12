<?php

use Illuminate\Database\Seeder;

class Users_LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users_Likes')->insert([
            'uid' => 'MdPBtM5T3wgzPDolMriYZDzTamr2',
            'shop_id' => 1
        ]);
        DB::table('Users_Likes')->insert([
            'uid' => 'MdPBtM5T3wgzPDolMriYZDzTamr2',
            'shop_id' => 4
        ]);
    }
}
