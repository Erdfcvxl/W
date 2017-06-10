<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ParksTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(ReviewObjectTableSeeder::class);
        $this->call(ObjectTableSeeder::class);
    }
}
