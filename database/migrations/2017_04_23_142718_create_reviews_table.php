<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('park_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('cable_system_score');
            $table->string('cable_system_desc')->nullable();
            $table->unsignedInteger('water_score');
            $table->string('water_desc')->nullable();
            $table->unsignedInteger('surroundings_score');
            $table->string('surroundings_desc')->nullable();
            $table->unsignedInteger('staff_score');
            $table->string('staff_desc')->nullable();
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
        Schema::dropIfExists('reviews');
    }
}
