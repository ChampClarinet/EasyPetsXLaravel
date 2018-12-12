<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Shops')->insert([
            'owner_uid' => 'TVQhVIUn1wfxpIuyu0Tgwj61jdo2',
            'name' => 'Moderndogs อาบน้ำ & ตัดขน',
            'url' => 'https://www.facebook.com/Moderndogsraiking',
            'days' => '1111111',
            'opens_on' => '07:00:00',
            'close_on' => '21:00:00',
            'tel' => '083-696-2727',
            'address' => 'ท่าตลาด ซอย 1 เทศบาลนครนครปฐม เทศบาลนครนครปฐม 73110',
            'latitude' => 13.7424095,
            'longitude' => 100.2432542,
            'description' => 'บริการอาบน้ำ-ตัดแต่งขนสุนัข,แมว,ฝากเลี้ยง,จำหน่ายอาหาร สุนัข แมว นก หนู ปลา กระต่าย และอุปกรณ์สัตว์เลี้ยง มีบริการรถ รับ-ส่ง'
        ]);
        DB::table('Shops')->insert([
            'owner_uid' => 'jHfOBP9szWMY9IrovpPc6CjRnc52',
            'name' => 'คลินิกรักสัตว์ ต้นสำโรง',
            'url' => 'https://www.facebook.com/0922565138dr.aum',
            'days' => '1111111',
            'opens_on' => '09:00:00',
            'close_on' => '21:00:00',
            'tel' => '092-256-5138',
            'address' => '127 ม. 3 ต.ธรรมศาลา อ.เมือง จ.นครปฐม เทศบาลนครนครปฐม',
            'latitude' => 13.8234817,
            'longitude' => 100.1012897,
            'description' => 'บริการรักษาสัตว์ ผ่าตัดทำหมัน ผ่าคลอด ฉีดวัคซีน ตรวจเลือด ตรวจฮอร์โมน'
        ]);
        DB::table('Shops')->insert([
            'owner_uid' => 'VqBswqjhFcNMVn8rHRBe7AtKGo12',
            'name' => 'โรงพยาบาลสัตว์โฮซันนา',
            'url' => 'https://www.facebook.com/RongPhyabalSatwHoSanNa',
            'days' => '1111111',
            'opens_on' => '07:30:00',
            'close_on' => '21:30:00',
            'tel' => '034 255 531',
            'address' => '147/1-20 ม.2 ต.สนามจันทร์ อ.เมือง จ.นครปฐม',
            'latitude' => 13.8012308,
            'longitude' => 100.0487459,
            'description' => 'รักษาโรคทั่วไป ผ่าตัด ทำหมัน รับฝากสัตว์เลี้ยง อาบน้ำตัดขน ฉุกเฉิน 24ชม.'
        ]);
        DB::table('Shops')->insert([
            'owner_uid' => 'KyMUY0QrCqZgYgcgzRiVLxLtErW2',
            'name' => 'Darling Dogs Salaya',
            'url' => 'https://www.facebook.com/DarlingdogsSalaya',
            'days' => '1111111',
            'opens_on' => '11:00:00',
            'close_on' => '21:00:00',
            'tel' => '095-363-6614',
            'address' => '99/19,20 ชั้นG เซ็นทรัลพลาซ่าศาลายา ตำบล บางเตย อำเภอ สามพราน เทศบาลนครนครปฐม',
            'latitude' => 13.7874581,
            'longitude' => 100.2770401,
            'description' => 'Darling Dogs Salaya ร้านให้บริการอาบน้ำ ตัดขน หมาและแมว พร้อมทั้ง สินค้าของใช้สัตว์เลี้ยงมากมาย ที่เซ็นทรัล ศาลายา'
        ]);
        DB::table('Shops')->insert([
            'owner_uid' => 'xnvTsTzCukStfLu7wcwR0Jyn8cw2',
            'name' => 'Cut&cute Pet Cafe',
            'url' => 'https://www.facebook.com/pages/Cutcute-Pet-Cafe/315992332165058',
            'days' => '1111111',
            'opens_on' => '09:00:00',
            'close_on' => '19:00:00',
            'tel' => '099-909-9665',
            'address' => '111/249 ถ.สามโคก-เสนา ต.สามโคก จ.ปทุมธานี 12160',
            'latitude' => 14.04931,
            'longitude' => 100.525,
            'description' => 'อาบน้ำ/ตัดแต่งขน/รับฝากเลี้ยง/จำหน่ายอาหารสัตว์'
        ]);
        DB::table('Shops')->insert([
            'owner_uid' => 'RTED4Ias9ZUl02S7A3wxvS9L1493',
            'name' => 'Showersdog',
            'url' => 'https://www.facebook.com/Showersdog-402597216606216',
            'days' => '1111111',
            'tel' => '081 957 9409',
            'address' => '154 บ้านท่าหรั่ง ม.7 ต.ทุ่งลาน อ.คลองหอยโข่ง สงขลา 90230',
            'latitude' => 6.86667,
            'longitude' => 100.4,
            'description' => 'อาบน้ำ ตัดแต่งขนสุนัข แมว อาหารและอุปกรณ์สัตว์เลี้ยง'
        ]);
        DB::table('Shops')->insert([
            'owner_uid' => 'fxMzAPiXgmZAdwmHh7FGp7li9Ya2',
            'name' => 'Thonglor Pet Hospital',
            'url' => 'https://www.facebook.com/pg/ThonglorPet',
            'days' => '1111111',
            'tel' => '02 079 9999',
            'address' => '80 ถนนเพชรพระราม (ถนนเพชรบุรี มุ่งสู่พระราม9) บางกะปิ ห้วยขวาง กรุงเทพมหานคร 10310',
            'latitude' => 13.747635,
            'longitude' => 100.59859600000004,
            'description' => 'โรงพยาบาลสัตว์ทองหล่อ thonglor pet hospital\r\nรักษาสัตว์เลี้ยง และให้คำปรึกษาเกี่ยวกับสัตว์เลี้ยง'
        ]);
        DB::table('Shops')->insert([
            'owner_uid' => 'Sg86UWKvTTZ4u0MAFQGns5HjrLI3',
            'name' => 'โรงพยาบาลสัตว์หมอต๋อม',
            'url' => 'https://www.facebook.com/dr.toamanimalhospital',
            'days' => '1111111',
            'tel' => '034 275 232',
            'address' => '18/14 ถ.ทรงพล ต.ลำพยา อ.เมือง จ.นครปฐม 73000',
            'latitude' => 13.8142661,
            'longitude' => 100.03615059999993,
            'description' => 'ให้บริการโดยสัตวแพทย์เฉพาะทางผู้เชียวชาญ ด้วยอุปกรณ์ที่ทันสมัย'
        ]);
    }
}
