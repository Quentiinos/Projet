<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('surname')->nullable();
            $table->date('birth')->nullable();
            $table->string('sexe')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('adress')->nullable();
            $table->string('compadress')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('password');
            $table->boolean('privilège')->default('0');
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
