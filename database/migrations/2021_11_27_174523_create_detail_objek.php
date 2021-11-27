<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailObjek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_objek', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_objek')->unsigned();
            $table->integer('id_kriteria')->unsigned();
            $table->integer('id_value')->unsigned();
            $table->timestamps();
            $table->foreign('id_objek')->references('id')->on('object');
            $table->foreign('id_kriteria')->references('id')->on('kriteria');
            $table->foreign('id_value')->references('id')->on('value_penilaian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_objek');
    }
}
