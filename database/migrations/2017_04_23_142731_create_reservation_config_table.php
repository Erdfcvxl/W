<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('reservation_config', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('park_id');
            $table->unsignedInteger('min_reservation');
            $table->unsignedInteger('max_reservation');
            $table->unsignedInteger('decline_time');
            $table->dateTime('open_time');
            $table->dateTime('close_time');
            $table->unsignedInteger('upfront_percentage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_config');
    }
}
