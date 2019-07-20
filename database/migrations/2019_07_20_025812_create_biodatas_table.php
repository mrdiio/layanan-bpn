<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('umur');
            $table->string('kewarganegaraan');
            $table->string('nomor_identitas')->unique();
            $table->string('pekerjaan');
            $table->text('alamat');
            $table->string('nama_ibu');
            $table->string('status_pasangan')->nullable();
            $table->string('nama_pasangan')->nullable();
            $table->string('legalitas');
            $table->enum('bayar_ptpgt', ['0','1'])->default('0');
            $table->string('no_hp');
            $table->string('status');
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
        Schema::dropIfExists('biodatas');
    }
}
