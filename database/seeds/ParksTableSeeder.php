<?php

use Illuminate\Database\Seeder;

class ParksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parks')->insert([
            'name'       => 'Wake Way',
            'address'      => 'Ežero g. 13, Nemėžio tvenkinys, Nemėžis 13265',
            'district'   => '8',
            'working_hours'   => '12:00-22:00',
            'website'		 => 'http://wakeway.lt/',
            'facebook_link'	 => 'https://www.facebook.com/WakewayLT',
            'latitude' => '54.638024',
            'longitude' => '25.376177',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('parks')->insert([
            'name'       => 'Splash',
            'address'      => 'M. Zdiechovskio g.27, Sudervės km., Vilniaus raj.',
            'district'   => '8',
            'working_hours'   => '08:00-22:00',
            'website'		 => 'http://splash.lt/',
            'facebook_link'	 => 'https://www.facebook.com/Splash.lt',
            'latitude' => null,
            'longitude' => null,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('parks')->insert([
            'name'       => 'Elev8',
            'address'      => 'Trakų g. 37, Keliakiemis, Vievio sen. ',
            'district'   => '8',
            'working_hours'   => '12:00-22:00',
            'website'		 => '',
            'facebook_link'	 => '',
            'latitude' => null,
            'longitude' => null,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('parks')->insert([
            'name'       => 'Fox Spot',
            'address'      => ' Meškerių gatvė, Šiauliai',
            'district'   => '9',
            'working_hours'   => '10:00-22:00',
            'website'		 => '',
            'facebook_link'	 => '',
            'latitude' => null,
            'longitude' => null,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('parks')->insert([
            'name'       => 'WakePond',
            'address'      => ' Kelias 121, tarp Anykščių ir Troškūnų',
            'district'   => '9',
            'working_hours'   => '10:00 - 22:00',
            'website'		 => '',
            'facebook_link'	 => 'https://www.facebook.com/wakepond/?fref=ts',
            'latitude' => null,
            'longitude' => null,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
