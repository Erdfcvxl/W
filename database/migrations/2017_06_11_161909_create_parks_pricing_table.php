<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParksPricingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('parks_pricing', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('park_id');
            $table->smallInteger('weekday');
            $table->time('start_time');
            $table->time('end_time');
            $table->float('wakeboarding_price');
            $table->string('other_prices');
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
        Schema::dropIfExists('parks_pricing');
    }
}
