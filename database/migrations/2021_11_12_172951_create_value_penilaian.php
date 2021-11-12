<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValuePenilaian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('value_penilaian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kriteria')->unsigned();
            $table->string('value');
            $table->integer('bobot');
            $table->timestamps();
            $table->foreign('id_kriteria')->references('id')->on('kriteria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('value_penilaian');
    }
}
