<?php

use Illuminate\Database\Seeder;

class ParksPricingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //WakeWay
        //Weekdays 12-17
        $pricing = DB::table('parks_pricing')->insert([
           'park_id'             => '1',
           'weekday'             => '1',
           'start_time'          => '12:00',
           'end_time'            => '17:00',
           'wakeboarding_price'  => '7.5',
           'other_prices'        => '',
           'created_at'          => \Carbon\Carbon::now(),
           'updated_at'          => \Carbon\Carbon::now()
       ]);
        $pricing = DB::table('parks_pricing')->insert([
           'park_id'             => '1',
           'weekday'             => '2',
           'start_time'          => '12:00',
           'end_time'            => '17:00',
           'wakeboarding_price'  => '7.5',
           'other_prices'        => '',
           'created_at'          => \Carbon\Carbon::now(),
           'updated_at'          => \Carbon\Carbon::now()
       ]);
        $pricing = DB::table('parks_pricing')->insert([
           'park_id'             => '1',
           'weekday'             => '3',
           'start_time'          => '12:00',
           'end_time'            => '17:00',
           'wakeboarding_price'  => '7.5',
           'other_prices'        => '',
           'created_at'          => \Carbon\Carbon::now(),
           'updated_at'          => \Carbon\Carbon::now()
       ]);
        $pricing = DB::table('parks_pricing')->insert([
           'park_id'             => '1',
           'weekday'             => '4',
           'start_time'          => '12:00',
           'end_time'            => '17:00',
           'wakeboarding_price'  => '7.5',
           'other_prices'        => '',
           'created_at'          => \Carbon\Carbon::now(),
           'updated_at'          => \Carbon\Carbon::now()
       ]);
        $pricing = DB::table('parks_pricing')->insert([
           'park_id'             => '1',
           'weekday'             => '5',
           'start_time'          => '12:00',
           'end_time'            => '17:00',
           'wakeboarding_price'  => '7.5',
           'other_prices'        => '',
           'created_at'          => \Carbon\Carbon::now(),
           'updated_at'          => \Carbon\Carbon::now()
       ]);
        //Weekdays 17-22
        $pricing = DB::table('parks_pricing')->insert([
           'park_id'             => '1',
           'weekday'             => '1',
           'start_time'          => '17:00',
           'end_time'            => '22:00',
           'wakeboarding_price'  => '15',
           'other_prices'        => '',
           'created_at'          => \Carbon\Carbon::now(),
           'updated_at'          => \Carbon\Carbon::now()
       ]);
        $pricing = DB::table('parks_pricing')->insert([
           'park_id'             => '1',
           'weekday'             => '2',
           'start_time'          => '17:00',
           'end_time'            => '22:00',
           'wakeboarding_price'  => '15',
           'other_prices'        => '',
           'created_at'          => \Carbon\Carbon::now(),
           'updated_at'          => \Carbon\Carbon::now()
       ]);
        $pricing = DB::table('parks_pricing')->insert([
           'park_id'             => '1',
           'weekday'             => '3',
           'start_time'          => '17:00',
           'end_time'            => '22:00',
           'wakeboarding_price'  => '15',
           'other_prices'        => '',
           'created_at'          => \Carbon\Carbon::now(),
           'updated_at'          => \Carbon\Carbon::now()
       ]);
        $pricing = DB::table('parks_pricing')->insert([
           'park_id'             => '1',
           'weekday'             => '4',
           'start_time'          => '17:00',
           'end_time'            => '22:00',
           'wakeboarding_price'  => '15',
           'other_prices'        => '',
           'created_at'          => \Carbon\Carbon::now(),
           'updated_at'          => \Carbon\Carbon::now()
       ]);
        $pricing = DB::table('parks_pricing')->insert([
           'park_id'             => '1',
           'weekday'             => '5',
           'start_time'          => '17:00',
           'end_time'            => '22:00',
           'wakeboarding_price'  => '15',
           'other_prices'        => '',
           'created_at'          => \Carbon\Carbon::now(),
           'updated_at'          => \Carbon\Carbon::now()
       ]);
        //Weekends
        $pricing = DB::table('parks_pricing')->insert([
           'park_id'             => '1',
           'weekday'             => '6',
           'start_time'          => '10:00',
           'end_time'            => '22:00',
           'wakeboarding_price'  => '15',
           'other_prices'        => '',
           'created_at'          => \Carbon\Carbon::now(),
           'updated_at'          => \Carbon\Carbon::now()
       ]);
        $pricing = DB::table('parks_pricing')->insert([
           'park_id'             => '1',
           'weekday'             => '7',
           'start_time'          => '10:00',
           'end_time'            => '22:00',
           'wakeboarding_price'  => '15',
           'other_prices'        => '',
           'created_at'          => \Carbon\Carbon::now(),
           'updated_at'          => \Carbon\Carbon::now()
       ]);


        //Splash
        //Weekdays
        $pricing = DB::table('parks_pricing')->insert([
           'park_id'             => '2',
           'weekday'             => '1',
           'start_time'          => '08:00',
           'end_time'            => '22:00',
           'wakeboarding_price'  => '40',
           'other_prices'        => '',
           'created_at'          => \Carbon\Carbon::now(),
           'updated_at'          => \Carbon\Carbon::now()
       ]);
        $pricing = DB::table('parks_pricing')->insert([
           'park_id'             => '2',
           'weekday'             => '2',
           'start_time'          => '08:00',
           'end_time'            => '22:00',
           'wakeboarding_price'  => '40',
           'other_prices'        => '',
           'created_at'          => \Carbon\Carbon::now(),
           'updated_at'          => \Carbon\Carbon::now()
       ]);
        $pricing = DB::table('parks_pricing')->insert([
           'park_id'             => '2',
           'weekday'             => '3',
           'start_time'          => '08:00',
           'end_time'            => '22:00',
           'wakeboarding_price'  => '40',
           'other_prices'        => '',
           'created_at'          => \Carbon\Carbon::now(),
           'updated_at'          => \Carbon\Carbon::now()
       ]);
        $pricing = DB::table('parks_pricing')->insert([
           'park_id'             => '2',
           'weekday'             => '4',
           'start_time'          => '08:00',
           'end_time'            => '22:00',
           'wakeboarding_price'  => '40',
           'other_prices'        => '',
           'created_at'          => \Carbon\Carbon::now(),
           'updated_at'          => \Carbon\Carbon::now()
       ]);
        $pricing = DB::table('parks_pricing')->insert([
           'park_id'             => '2',
           'weekday'             => '5',
           'start_time'          => '08:00',
           'end_time'            => '22:00',
           'wakeboarding_price'  => '40',
           'other_prices'        => '',
           'created_at'          => \Carbon\Carbon::now(),
           'updated_at'          => \Carbon\Carbon::now()
       ]);
        //Weekdays 17-22
        $pricing = DB::table('parks_pricing')->insert([
           'park_id'             => '2',
           'weekday'             => '6',
           'start_time'          => '08:00',
           'end_time'            => '22:00',
           'wakeboarding_price'  => '45',
           'other_prices'        => '',
           'created_at'          => \Carbon\Carbon::now(),
           'updated_at'          => \Carbon\Carbon::now()
       ]);
        $pricing = DB::table('parks_pricing')->insert([
           'park_id'             => '2',
           'weekday'             => '7',
           'start_time'          => '08:00',
           'end_time'            => '22:00',
           'wakeboarding_price'  => '45',
           'other_prices'        => '',
           'created_at'          => \Carbon\Carbon::now(),
           'updated_at'          => \Carbon\Carbon::now()
       ]);
    }
}
