<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chiens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->unsignedBigInteger('sexe_id');
            $table->foreign('sexe_id')->references('id')->on('sexe');
            $table->text('caractere');
            $table->unsignedBigInteger('race_id');
            $table->foreign('race_id')->references('id')->on('races');
            $table->string('naissance');
            $table->boolean('castre');
            $table->text('url_picture');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chiens');
    }
}
