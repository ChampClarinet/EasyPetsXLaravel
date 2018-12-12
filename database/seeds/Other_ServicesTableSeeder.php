<?php

use Illuminate\Database\Seeder;

class Other_ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Other_Service')->insert([
            'shop_id' => 1,
            'details' => 'จำหน่ายอาหารและอุปกรณ์สัตว์เลี้ยง',
            'price' => 'ขึ้นอยู่กับสินค้า'
        ]);
        DB::table('Other_Service')->insert([
            'shop_id' => 4,
            'details' => 'Pet Shop',
            'price' => 'ขึ้นอยู่กับสินค้า'
        ]);
        DB::table('Other_Service')->insert([
            'shop_id' => 4,
            'details' => 'Soda Spa for Pets',
            'price' => '200 - 250 บาท'
        ]);
        DB::table('Other_Service')->insert([
            'shop_id' => 6,
            'details' => 'ขายอาหารและอุปกรณ์สัตว์เลี้ยง',
            'price' => 'ขึ้นอยู่กับสินค้า'
        ]);
        DB::table('Other_Service')->insert([
            'shop_id' => 7,
            'details' => 'POOL | PARK | PLAY. Pet friendly restaurants, cafe, nail bar and massage, 7-11.',
            'price' => 'ขึ้นอยู่กับสินค้า'
        ]);
        DB::table('Other_Service')->insert([
            'shop_id' => 7,
            'details' => 'Pet Pool',
            'price' => 'ขึ้นอยู่กับสินค้า'
        ]);
        DB::table('Other_Service')->insert([
            'shop_id' => 7,
            'details' => 'Pet Taxi',
            'price' => 'ขึ้นอยู่กับสินค้า'
        ]);
        DB::table('Other_Service')->insert([
            'shop_id' => 7,
            'details' => 'Pet Park',
            'price' => '300'
        ]);
    }
}
