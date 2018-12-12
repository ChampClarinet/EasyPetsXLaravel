<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AvailablePetsTableSeeder::class);
        $this->call(GroomsTableSeeder::class);
        $this->call(HospitalsTableSeeder::class);
        $this->call(HotelsTableSeeder::class);
        $this->call(Other_ServicesTableSeeder::class);
        $this->call(RepliesTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(ShopsTableSeeder::class);
        $this->call(Special_PetsTableSeeder::class);
        $this->call(Users_LikesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
