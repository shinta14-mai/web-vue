<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStandarTeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standar_teks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemohon');
            $table->text('alamat_pemohon');
            $table->string('no_tlp');
            $table->string('jenis_usaha');
            $table->text('alamat_usaha');
            $table->double('luas_lahan');
            $table->double('luas_bangunan');
            $table->string('status_lahan');
            $table->string('email');
            $table->string('surat_pemohon')->nullable();
            $table->string('ktp')->nullable();
            $table->string('sertifikat_tanah')->nullable();
            $table->string('ktr')->nullable();
            $table->string('rencana_tapak')->nullable();
            $table->string('desain_bangunan')->nullable();
            $table->string('code')->nullable();
            $table->string('verifikasi')->nullable();
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
        Schema::dropIfExists('standar_teks');
    }
}
