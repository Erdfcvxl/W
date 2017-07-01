<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('parks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 32);
            $table->string('district', 32)->nullable();
            $table->string('address', 255);
            $table->string('working_hours', 16)->nullable();
            $table->string('website', 255)->nullable();
            $table->string('facebook_link')->nullable();
            $table->integer('latitude')->nullable();
            $table->integer('longitude')->nullable();
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
        Schema::dropIfExists('parks');
    }
}
