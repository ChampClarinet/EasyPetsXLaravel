<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'uid' => 'jk4eLbh8KmQM2XNTHS9KIEvNidz1',
            'name' => 'Wallop O-pasakhun',
            'email' => 'opasakhun_w@silpakorn.edu',
            'picture' => 'https://lh6.googleusercontent.com/-COL7CP3Bz1I/AAAAAAAAAAI/AAAAAAAAAAs/s3dhS-P-gSU/s96-c/photo.jpg'
        ]);
        DB::table('users')->insert([
            'uid' => 'MdPBtM5T3wgzPDolMriYZDzTamr2',
            'name' => 'Wallop O-pasakhun',
            'email' => 'champbassist159@gmail.com',
            'picture' => 'https://lh5.googleusercontent.com/-0uv7KHeiK2A/AAAAAAAAAAI/AAAAAAAACB4/AF9SU0X5bL0/s96-c/photo.jpg'
        ]);
        DB::table('users')->insert([
            'uid' => 'npLT0O1p6nUKDpwj3CgpBnU72eB3',
            'name' => 'Wallop O-pasakhun',
            'email' => 'opasakhun_w@silpakorn.edu',
            'picture' => 'https://lh6.googleusercontent.com/-COL7CP3Bz1I/AAAAAAAAAAI/AAAAAAAAAAs/s3dhS-P-gSU/s96-c/photo.jpg'
        ]);
    }
}
