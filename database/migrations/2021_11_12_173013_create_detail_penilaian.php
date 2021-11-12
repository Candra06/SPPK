<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPenilaian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_penilaian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_penilaian')->unsigned();
            $table->integer('id_value_penilaian')->unsigned();
            $table->integer('nilai');
            $table->timestamps();
            $table->foreign('id_penilaian')->references('id')->on('penilaian');
            $table->foreign('id_value_penilaian')->references('id')->on('value_penilaian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_penilaian');
    }
}
