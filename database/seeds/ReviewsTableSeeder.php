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
        $review = DB::table('reviews')->insert([
            'park_id'            => '1',
            'user_id'            => '1',
            'cable_system_score' => '9',
            'water_score'        => '9',
            'surroundings_score' => '9',
            'staff_score'        => '9',
            'created_at'         => \Carbon\Carbon::now(),
            'updated_at'         => \Carbon\Carbon::now()
        ]);
        $review = DB::table('reviews')->insert([
            'park_id'            => '1',
            'user_id'            => '2',
            'cable_system_score' => '6',
            'water_score'        => '7',
            'surroundings_score' => '4',
            'staff_score'        => '9',
            'created_at'         => \Carbon\Carbon::now(),
            'updated_at'         => \Carbon\Carbon::now()
        ]);
        $review = DB::table('reviews')->insert([
            'park_id'            => '2',
            'user_id'            => '1',
            'cable_system_score' => '10',
            'water_score'        => '4',
            'surroundings_score' => '4',
            'staff_score'        => '5',
            'created_at'         => \Carbon\Carbon::now(),
            'updated_at'         => \Carbon\Carbon::now()
        ]);
        $review = DB::table('reviews')->insert([
            'park_id'            => '2',
            'user_id'            => '2',
            'cable_system_score' => '9',
            'water_score'        => '7',
            'surroundings_score' => '5',
            'staff_score'        => '9',
            'created_at'         => \Carbon\Carbon::now(),
            'updated_at'         => \Carbon\Carbon::now()
        ]);
    }
}
