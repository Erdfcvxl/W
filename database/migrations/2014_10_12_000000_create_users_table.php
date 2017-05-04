<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('social_type')->default('0');
            $table->unsignedInteger('social_id')->default('0');
            $table->string('password');
            $table->string('name', 25);
            $table->string('surname', 25);
            $table->string('email')->unique();
            $table->string('phone_number', 14);
            $table->unsignedInteger('city');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
