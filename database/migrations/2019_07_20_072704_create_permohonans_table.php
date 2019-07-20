<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermohonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pemohon_id');
            $table->string('nomor_pemohon')->unique();
            $table->boolean('fc_identitas');
            $table->boolean('surat_kuasa')->nullable();
            $table->boolean('bukti_perolehan')->nullable();
            $table->boolean('fc_suratukur')->nullable();
            $table->boolean('imb')->nullable();
            $table->boolean('fc_persetujuanbidang')->nullable();
            $table->boolean('fc_rekomendasi')->nullable();
            $table->boolean('surat_persetujuan_penguasaan')->nullable();
            $table->boolean('surat_pernyataan')->nullable();
            $table->boolean('surat_pelepasan_kawasan')->nullable();
            $table->boolean('surat_penunjukkan')->nullable();
            $table->boolean('surat_rencana')->nullable();
            $table->boolean('surat_pernyataan_modal')->nullable();
            $table->boolean('surat_lain')->nullable();
            $table->string('legalitas')->nullable();
            $table->enum('bayar_ptpgt', ['0','1'])->default('0');
            $table->string('file_peta_bidang')->nullable();
            $table->string('file_ptpgt')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('permohonans');
    }
}
