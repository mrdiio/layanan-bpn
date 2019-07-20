<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanggungansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanggungans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pemohon_id');
            $table->string('nama');
            $table->timestamps();
            $table->foreign('pemohon_id')->references('id')->on('biodatas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanggungans');
    }
}
