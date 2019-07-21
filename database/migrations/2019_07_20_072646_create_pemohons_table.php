<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemohonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemohons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('umur');
            $table->string('kewarganegaraan');
            $table->string('nomor_identitas')->unique();
            $table->string('jenis_identitas');
            $table->string('pekerjaan');
            $table->text('alamat');
            $table->string('nama_ibu');
            $table->string('status_pasangan')->nullable();
            $table->string('nama_pasangan')->nullable();
            $table->string('no_hp');
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
        Schema::dropIfExists('pemohons');
    }
}
