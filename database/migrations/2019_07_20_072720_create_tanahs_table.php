<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanahs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pemohon_id');
            $table->string('jalan');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('luas');
            $table->string('batas_utara');
            $table->string('batas_timur');
            $table->string('batas_selatan');
            $table->string('batas_barat');
            $table->string('status_tanah');
            $table->string('tanggal_haktanah');
            $table->string('nomor_haktanah');
            $table->string('jenis_tanah');
            $table->string('dasar_penguasaan');
            $table->string('rencana_penggunaan');
            $table->timestamps();
            $table->foreign('pemohon_id')->references('id')->on('pemohons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanahs');
    }
}
