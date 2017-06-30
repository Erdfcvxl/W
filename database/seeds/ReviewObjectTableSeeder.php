<?php

use Illuminate\Database\Seeder;

use App\Modules\Park\ParksPricing;

class ReviewObjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $review_objects = DB::table('review_objects')->insert([
           'user_id'            => '1',
           'park_id'            => '1',
           'object_id'          => '1',
           'score'              => '10',
           'comment'            => 'tas Redbulis ahuenas',
           'created_at'         => \Carbon\Carbon::now(),
           'updated_at'         => \Carbon\Carbon::now()
       ]);
        $review_objects = DB::table('review_objects')->insert([
           'user_id'            => '1',
           'park_id'            => '1',
           'object_id'          => '2',
           'score'              => '4',
           'comment'            => 'tas Redbulis ahuenas',
           'created_at'         => \Carbon\Carbon::now(),
           'updated_at'         => \Carbon\Carbon::now()
       ]);
        $review_objects = DB::table('review_objects')->insert([
           'user_id'            => '2',
           'park_id'            => '1',
           'object_id'          => '1',
           'score'              => '7',
           'comment'            => 'tas Redbulis ahuenas',
           'created_at'         => \Carbon\Carbon::now(),
           'updated_at'         => \Carbon\Carbon::now()
       ]);
        $review_objects = DB::table('review_objects')->insert([
           'user_id'            => '2',
           'park_id'            => '1',
           'object_id'          => '2',
           'score'              => '10',
           'comment'            => 'tas Redbulis ahuenas',
           'created_at'         => \Carbon\Carbon::now(),
           'updated_at'         => \Carbon\Carbon::now()
       ]);
    }
}
