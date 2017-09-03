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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
            $table->string('dateBirth', 10);
            $table->string('avatar',255)->default('default.jpg');
            $table->string('logo',255)->default('default.png');
            $table->string('bio', 255);
            $table->string('gender', 25);
            $table->string('country', 255);
            $table->string('state', 255);
            $table->string('city', 255);
            $table->string('adress', 255);
            $table->integer('postal');
            $table->boolean('admin')->default(false);
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
