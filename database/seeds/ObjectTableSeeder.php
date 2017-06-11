<?php

use Illuminate\Database\Seeder;

class ObjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $object = DB::table('objects')->insert([
              'park_id'            => '1',
              'gallery_id'         => null,
              'name'               => 'King Size Rail',
              'description'        => 'Ilgas railas, ant šono turintis Red Bull lipduką, todėl kitaip vadinamas RedBuliu',
              'created_at'         => \Carbon\Carbon::now(),
              'updated_at'         => \Carbon\Carbon::now()
            ]);
    }
}
