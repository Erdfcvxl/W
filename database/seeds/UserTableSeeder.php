<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->insert([
                                               'name' => 'tomas',
                                               'surname' => 'martinkus',
                                               'phone_number' => '868530357',
                                               'email' => 'tomas@nordcode.lt',
                                               'password' => bcrypt('1234'),
                                               'city' => 0,
                                               'created_at'         => \Carbon\Carbon::now(),
                                               'updated_at'         => \Carbon\Carbon::now()
                                           ]);
        $user = DB::table('users')->insert([
                                               'name' => 'rokas',
                                               'surname' => 'rudgalvis',
                                               'phone_number' => '861234567',
                                               'email' => 'rokas@nordcode.lt',
                                               'password' => bcrypt('1234'),
                                               'city' => 0,
                                               'created_at'         => \Carbon\Carbon::now(),
                                               'updated_at'         => \Carbon\Carbon::now()
                                           ]);
    }
}
