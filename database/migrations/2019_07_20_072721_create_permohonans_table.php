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
            $table->unsignedBigInteger('tanah_id');
            $table->string('nomor_pemohon')->unique();
            $table->boolean('fc_identitas')->default(0);
            $table->boolean('surat_kuasa')->default(0);
            $table->boolean('bukti_perolehan')->default(0);
            $table->boolean('fc_suratukur')->default(0);
            $table->boolean('imb')->default(0);
            $table->boolean('fc_persetujuanbidang')->default(0);
            $table->boolean('fc_rekomendasi')->default(0);
            $table->boolean('surat_persetujuan_penguasaan')->default(0);
            $table->boolean('surat_pernyataan')->default(0);
            $table->boolean('surat_pelepasan_kawasan')->default(0);
            $table->boolean('surat_penunjukkan')->default(0);
            $table->boolean('surat_rencana')->default(0);
            $table->boolean('surat_pernyataan_modal')->default(0);
            $table->boolean('surat_lain')->default(0);
            $table->string('legalitas')->nullable();
            $table->boolean('bayar_ptpgt')->default(0);
            $table->string('file_peta_bidang')->nullable();
            $table->string('file_ptpgt')->nullable();
            $table->string('status');
            $table->timestamps();
            
            $table->foreign('pemohon_id')->references('id')->on('pemohons')->onDelete('cascade');
            $table->foreign('tanah_id')->references('id')->on('tanahs')->onDelete('cascade');
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
